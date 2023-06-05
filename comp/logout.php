<?php
include_once('PDO.php');
session_destroy();
header('Location: ../login.php');
