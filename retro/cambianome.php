<?php  /* hzSuNtDlK2wAlUuCf6jzriPMKsP */   include("sec.php"); ?>

<?php include("layout1.php") ?>

		<div id="log" class="container"><br>
			
          <br>  <br> <?php  $cartella = basename(getcwd()); ?> 
          <form action="cambiacartella.php" method="POST">
          <h3>Modifica l url di accesso al pannello, (scegli uno molto difficile inventato)<br>
          Nome attuale: <b><?php echo $cartella ?></b><br><br><br> Nuovo nome:</h3> <input type="text" name="nome" /><BR><BR>
<input type="submit" class="btn btn-danger" value="MODIFICA" />
          </form>
		</div>

<?php include("layout2.php") ?><?php ?>