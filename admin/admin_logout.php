<?php session_start(); ?>

<?php

	session_unset();
	session_destroy();

	Header("Location: index.php");