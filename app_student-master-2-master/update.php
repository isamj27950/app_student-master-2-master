<?php
$title= "Modifier un étudiant";
session_start();

//fais la capture
ob_start();

include('views/studentPage/updateStudent.php');
//stop la capture et stock ts ce que j'ai capturé
$content= ob_get_clean();
require('views/layout.php');