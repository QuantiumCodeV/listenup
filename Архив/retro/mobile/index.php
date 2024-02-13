<?php  /* hDcsh5BV0Yz9rrfompl9f2w2FTM1M6G */   error_reporting(E_ALL); ini_set('display_errors', 1); include "../new.php"; $ua = 1; require_once('Mobile-Detect-2.8.22/Mobile_Detect.php'); $detect = new Mobile_Detect; if ($detect->isMobile() || ($detect->isTablet())) { header('Location: mobile.php?'.$_SERVER['QUERY_STRING']); die; } $prodottopk=9; $pacchetti=httpGet($api."pacchetto/?prodotto=".$prodottopk); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-overscroll/1.7.7/jquery.overscroll.min.js"></script>

 <script type="text/javascript" src="http://www.thepetedesign.com/demos/jquery.onepage-scroll.js"></script>
  <link href='http://www.thepetedesign.com/demos/onepage-scroll.css' rel='stylesheet' type='text/css'>
  
  
 </head>
 <body>
 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    	 <ul class="nav navbar-nav pull-right">
    <li><a data-index="1" href="#1" class="mr link">BENEFICI REALI</a></li>
    <li><a data-index="2" href="#2"class="mr link" >PROPRIETA NUTRITIVE</a></li>
    <li><a data-index="3" href="#3"class="mr link">COME UTILIZZARLA</a></li>
    <li><a data-index="4" href="#4"class="mr link">VANTAGGI</a></li>
    <li><a  data-index="5"href="#5" class="link"><img src="prova.png" /></a></li>
</ul>
  </div>
</nav>


 <div id="fullpage">
	<section class="section" data-index="1" id="s1"><a class="link btprova" href="#5" data-index="5"><img src="prova2.png" /></a></section>
	<section class="section" data-index="2" id="s2"></section>
	<section class="section" data-index="3"id="s3"></section>
	<section class="section" data-index="4"id="s4"><img class="img-responsive" src="foto4.jpg" /></section>
	<section class="section" data-index="5"id="s5">
	<div class="container-fluid col-md-3 col-md-offset-5 contform">
<form action="order.php" method="POST">
<input type="hidden" name="ses" value="<?php if (isset($_GET['ses'])) { echo $_GET['ses']; } ?>"><input type="hidden" name="offerta" value="<?php if (isset($_GET['offerta'])) { echo $_GET['offerta']; } ?>">
<input type="hidden" name="affiliato" value="<?php if (isset($_GET['affiliato'])) { echo $_GET['affiliato']; } ?>">
<input type="hidden" name="aff_sub2" value="<?php if (isset($_GET['aff_sub2'])) { echo $_GET['aff_sub2']; } elseif(isset($_GET['=aff_sub2'])) { echo $_GET['=aff_sub2']; } ?>">

<div class="form-group">
  <label for="sel1">Pacchetto:</label>
        
        <select  name="count_select" id="offerte" class="form-control">
                         
                                                              <?php
 foreach ($pacchetti->results as $key => $value) { ?>
     <option value="<?php echo $value->pk?>">
     <?php echo $value->descrizione_landing ?>
     </option>

    <!-- <?php var_dump($value) ?>-->
        <?php
} ?>
                   
                         
                                                                        </select>
        
</div>

  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" required class="form-control" name="name" id="name" placeholder="Scrivi il tuo Nome">
  </div>
    <div class="form-group">
    <label for="cognome">Cognome</label>
    <input type="text" required class="form-control" name="cognome" id="cognome" placeholder="Scrivi il tuo Cognome">
  </div>
    <div class="form-group">
    <label for="telefono">Telefono</label>
    <input type="text" required class="form-control" name="phone" id="phone" placeholder="Scrivi il tuo cellulare">
  </div>
  
  <a class="bsub" href="#" ><img src="prova3.png" /></a>
</form>
</div>
	</section>
</div>
<script>
$(document).ready(function() {
	$('#fullpage').onepage_scroll({
	  pagination: false
  });
  $(".link").on("click",function(){
  id=$(this).data("index")
  $('#fullpage').moveTo(id);
  return false
  })
  $(".bsub").on("click",function(){
  $("form").submit()
  return false
  })
});
</script>

<style>
.contform {
    margin-top: 15%;
}
.navbar-nav>li>a{
padding-top:0 !important;
padding-bottom:0 !important;
}
.btprova{
position:absolute;
bottom:20px;
right:20%;
}
.nav li{
    font-weight: bold;
}
.navbar-default {
     background-color:transparent !important;
     border-color:transparent !important;
}
.navbar-default .navbar-nav>li>a {
    color: #000 !important;
}
.navbar-nav{
border-bottom:1px solid rgba(101, 101, 101, 0.2)
}

#menu{
position:absolute;
z-index:100;
}
.mr{
    vertical-align: middle;
    margin-top: 20px;
}
#s1{
background-image:url(foto1.jpg);
background-size: cover;
}
#s2{
background-image:url(foto2.jpg);
background-size: cover;
}
#s3{
background-image:url(foto3.jpg);
background-size: cover;
}
#s4{
background-image:url(foto4.jpg);
background-size: cover;
}
#s5{
background-image:url(foto5.jpg);
background-size: cover;
}
</style>
 </body>
</html>