<?php

session_start();
session_unset(); //les valeurs des variables de la session sont supprimées
session_destroy();
header("Location:../index.php");