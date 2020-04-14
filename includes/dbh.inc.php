<?php

 $servername = "localhost";
 $dBUsername = "root";
 $dBPassword = "root";
 $dBName = "quizz_login";

 $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

 if (!$conn) {
    die("La connexion a échouée: ".mysqli_connect_error());
 }

