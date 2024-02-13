<?php  /* ChjA3gvHQ7qEDSM069nAt5DcZEps5B3rnVJW */   session_start(); require "cred.php"; 
$validUser = false; if(isset($_SESSION["login"])){ if($_SESSION["login"]) { $validUser = true; } } 
$msg=$username=$password=""; if(isset($_POST["username"])){ $username= $_POST["username"]; } 
if(isset($_POST["password"])){ $password= $_POST["password"]; } if(isset($_POST["sub"]))
 { $validUser = $_POST["username"] == $cred_us && $_POST["password"] == $cred_pass; 
 if(!$validUser){ $msg="credenziali non valide"; }else{ $_SESSION["login"] = true; setcookie("loggato1", "loggato1", time()+86400); } 
 if($validUser) { header("Location: pannello.php"); die(); } } if(isset($_SESSION["login"])){ if($_SESSION["login"])
  { header("Location: pannello.php"); die(); } } ?>
<html><head><base href="https://bootstrapstudio.io/demo/" bs-system-element="" bs-hidden=""> 
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
				<title>PANNELLO 2023 B4</title><link rel="stylesheet" href="https://bootstrapstudio.io/demo/embed/bootstrap/4/default/bootstrap.min.css">
			<style bs-system-element="" bs-hidden="">
		html::-webkit-scrollbar {
			height: 7px;
			width: 7px;
			background: #2f363a;
		}

		html::-webkit-scrollbar-thumb {
			background: rgb(137, 143, 146);
		}

		html::-webkit-scrollbar-thumb:hover {
			background: #767F82;
		}

		html::-webkit-scrollbar-corner {
			display:none;
		}

		html{
			-webkit-user-select: none;
			user-select:none;
			overflow: auto !important;
            background-color:#13577a;;
		}

		body{
      background-color:#13577a;;
			min-height:650px;
		}

		*{
			cursor:default !important;
			pointer-events:all !important;
		}

		a{
			cursor:text;
		}

		img:not([src]):not([srcset]){
			background: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIg0KCXhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIg0KCXdpZHRoPSIxNjVweCIgaGVpZ2h0PSIxNjVweCIgdmlld0JveD0iMCAwIDE2NSAxNjUiPg0KPHBhdGggZmlsbFJ1bGU9ImV2ZW5vZGQiIGQ9Ik0gMC43OSAyLjIxQyAwLjc5IDIuMjEgMi4yMSAwLjc5IDIuMjEgMC43OSAyLjIxIDAuNzkgMTY0LjIxIDE2Mi43OSAxNjQuMjEgMTYyLjc5IDE2NC4yMSAxNjIuNzkgMTYyLjc5IDE2NC4yMSAxNjIuNzkgMTY0LjIxIDE2Mi43OSAxNjQuMjEgMC43OSAyLjIxIDAuNzkgMi4yMVoiIGZpbGw9InJnYigxOTMsMTk1LDE5NSkiLz48cGF0aCBmaWxsUnVsZT0iZXZlbm9kZCIgZD0iTSAxNjIuNzkgMC43OUMgMTYyLjc5IDAuNzkgMTY0LjIxIDIuMjEgMTY0LjIxIDIuMjEgMTY0LjIxIDIuMjEgMi4yMSAxNjQuMjEgMi4yMSAxNjQuMjEgMi4yMSAxNjQuMjEgMC43OSAxNjIuNzkgMC43OSAxNjIuNzkgMC43OSAxNjIuNzkgMTYyLjc5IDAuNzkgMTYyLjc5IDAuNzlaIiBmaWxsPSJyZ2IoMTkyLDE5NCwxOTUpIi8+PC9zdmc+');
			width: 80px;
			height: 80px;
			background-size: 100%;
			background-repeat:no-repeat;
		}

		/* Stopping css animations on the stage */

		*:not([bs-anim-preview]){
			transition:none !important;
			transition-duration: 0s !important;
		}

		[bs-dragged]{
			opacity:0.3 !important;
		}

		/* Inline editing */

		[contenteditable=true] {
			box-shadow:-1px -1px 1px rgba(17, 142, 232, 0.85), 
				1px 1px 1px rgba(17, 142, 232, 0.85), 
				0 0 11px rgba(17, 142, 232, 0.85) !important;
			outline:none !important;
			min-height:1em;
			cursor:initial !important;
		}

		[contenteditable=true] *:not([contenteditable=false]){
			cursor:initial !important;
		}

		[contenteditable=true]:empty:before {
		    content: "\00a0\00a0" !important;
		}

		[contenteditable=true] [contenteditable=false] {
			box-shadow:0 0 0 1px rgba(17, 142, 232, 0.85);
		}

		/* Preventing mouse events for embeds */

		iframe, embed, object, audio{
			pointer-events: none !important;
		}

		html.hit-testing iframe,
		html.hit-testing embed,
		html.hit-testing object,
		html.hit-testing audio {
			pointer-events: all !important;
		}

		

		/* Giving sizes to some elements. */

		div[class*="col-"]:empty:before,
		form:empty:before,
		.row:empty:before,
		.form-row:empty:before,
		.form-group:empty:before,
		.container:empty:before,
		.container-fluid:empty:before{
			background-color:#eee;
			content:'Empty Row';
			line-height:40px;
			text-align: center;
			display:block;
			line-height:80px;
			font-size:24px;
			color:#aaa;
			font-weight:bold;
		}

		div[class*="col-"]:empty:before{
			content:'Empty Column';
		}

		form:empty:before{
			content:'Empty Form';
		}

		.form-group:empty:before{
			content:'Empty Form Group';
		}

		form.navbar-form:empty:before{
			display: inline-block;
			padding:0 40px;
			font-size:16px;
			line-height:36px;
		}

		.container:empty:before,
		.container-fluid:empty:before{
			content:'Empty Container';
		}

		.thumbnail img:not([src]){
			background-repeat: no-repeat;
		    background-size: 100% 85%;
		    background-position-y: 50%;
		    width: 100%;
			height: 180px;
		}

		/* Making the dropdown menus have a white background when they're edited */

		.dropdown-item:active,
		.dropdown-menu>li>a:focus{
			background:unset;
			color:unset;
		}

		/* This is needed because the li items are 0x0px by default,
		and bootstrap studio can't select them */

		.pagination>li {
		  float: left;
		}

		/* Iframes without src are colored in gray */
		.embed-responsive iframe:not([src]){
			background-color:#ddd;
		}

		/* This is needed, otherwise split buttons in input groups break into two lines. */

		.input-group-btn .btn-group > .btn{
			float:none;
		}

		

		div[class*="col-"]:empty,		
		div.col:empty{
			display:flex;
		}

		div[class*="col-"]:empty:before,
		form:empty:before,
		.row:empty:before,
		.form-row:empty:before,
		.container:empty:before, 
		.container-fluid:empty:before{
			width: 100%;
		}

		div.col:empty:before{
			background-color:#eee;
			content:'Empty Column';
			line-height:40px;
			text-align: center;
			display:block;
			line-height:80px;
			font-size:24px;
			color:#aaa;
			font-weight:bold;
			width:100%;
		}

		.toast-header img:not([src]):not([srcset]) {
			width: 30px;
			height: 30px;
		}

		/* Stopping css spinner animations */

		.spinner-grow:not([bs-spinner-animation]),
		.spinner-border:not([bs-spinner-animation]) {
			animation: none;
		}

		.spinner-grow:not([bs-spinner-animation]) {
			opacity: 1;
			transform: scale(.8);
		}

		.custom-range::-webkit-slider-runnable-track {
		    cursor: inherit;
		}

		</style><link rel="stylesheet" href="https://bootstrapstudio.io/demo/embed/embed/animation/animate.min.css" bs-system-element="" bs-hidden=""><link rel="stylesheet" href="https://bootstrapstudio.io/demo/embed/embed/animation/aos.min.css" bs-system-element="" bs-hidden=""><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="https://bootstrapstudio.io/demo/embed/embed/fonts/fontawesome-all.min.css"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="https://bootstrapstudio.io/demo/embed/embed/fonts/font-awesome.min.css"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="https://bootstrapstudio.io/demo/embed/embed/fonts/ionicons.min.css"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="https://bootstrapstudio.io/demo/embed/embed/fonts/line-awesome.min.css"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="https://bootstrapstudio.io/demo/embed/embed/fonts/material-icons.min.css"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="https://bootstrapstudio.io/demo/embed/embed/fonts/simple-line-icons.min.css"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="https://bootstrapstudio.io/demo/embed/embed/fonts/typicons.min.css"><link rel="stylesheet" href="https://bootstrapstudio.io/demo/embed/embed/fonts/fontawesome5-overrides.min.css" bs-system-element="" bs-hidden=""><style>.login-clean {
  background:#13577a;;
  padding: 80px 0;
}

.login-clean form {
  max-width: 320px;
  width: 90%;
  margin: 0 auto;
  background-color: #f7f7f7;
  padding: 40px;
  border-radius: 4px;
  color: #505e6c;
  box-shadow: 1px 1px 5px rgba(0,0,0,0.1);
}

.login-clean .illustration {
  text-align: center;
  padding: 0 0 20px;
  font-size: 100px;
  color: rgb(244,71,107);
}

.login-clean form .form-control {
  background: #f7f9fc;
  border: none;
  border-bottom: 1px solid #dfe7f1;
  border-radius: 0;
  box-shadow: none;
  outline: none;
  color: inherit;
  text-indent: 8px;
  height: 42px;
}

.login-clean form .btn-primary {
  background: #0082a9;
  border: none;
  border-radius: 4px;
  padding: 11px;
  box-shadow: none;
  margin-top: 26px;
  text-shadow: none;
  outline: none !important;
}

.login-clean form .btn-primary:hover, .login-clean form .btn-primary:active {
  background: #eb3b60;
}

.login-clean form .btn-primary:active {
  transform: translateY(1px);
}

.login-clean form .forgot {
  display: block;
  text-align: center;
  font-size: 12px;
  color: #6f7a85;
  opacity: 0.9;
  text-decoration: none;
}

.login-clean form .forgot:hover, .login-clean form .forgot:active {
  opacity: 1;
  text-decoration: none;
}
</style><style></style><style bs-system-element="" bs-hidden=""></style></head>
			<body><div class="login-clean">
    <form method="post">
        <h2 class="sr-only">Login Form</h2>
        <h4 class="text-center">PANNELLO 2023 B4</h4><br>
      <?php
 if($msg){ echo "<div class='alert alert-warning'>$msg</div>"; } ?>
        <div class="form-group"><input type="text" class="form-control" name="username" placeholder="username"></div>
        <div class="form-group" style="display:none"><input type="text" class="form-control"value="<?php echo $username?>" name="sub" placeholder="username" value="1"></div>
        <div class="form-group"><input type="password" class="form-control" name="password" value="<?php echo $password?>"placeholder="Password"></div>
        <div class="form-group"><button class="btn btn-primary btn-block" type="submit">ACCEDI</button></div>
    </form>
</div></body></html><?php  ?>