<?php

require 'abrir_session.php';
$_SESSION = array();
session_destroy();
// * Esto redirecciona al index
header("location: ../index.php");