<?php
    setcookie('status', 'false', time()-5000, '/');
	header('location: ../view/login.php');