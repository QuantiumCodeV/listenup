<?php

if (isset($_POST['login'])){
    if (isset($_POST['password'])){
        if ($_POST['password'] == 'Lw5ADF1fsl' && $_POST['login'] == 'admin'){
            setcookie('login', 'true', time() + 3600, '/');
            header('Location: /admin/panel.php');
        }
        else{
            header('Location: /admin/index.php?error=1');
        }
    }
    else{
        header('Location: /admin/index.php?error=1');
    }
}else{
    header('Location: /admin/index.php?error=1');
}
