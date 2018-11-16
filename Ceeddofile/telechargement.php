<?php

session_start();

$test=$_SESSION["fichier"] ;
var_dump ($test);
echo '<a href="http://localhost/Ceeddofile/upload/'.$test.'">telecharger</a>';
session_destroy();

