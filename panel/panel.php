<?php

session_start();
	if (@!$_SESSION['user']) {
		header("Location:https://paviotti.com.ar/");
	}elseif ($_SESSION['rol']>=2) {
		header("Location:https://paviotti.com.ar/");
	}

echo $_SESSION['cod'];