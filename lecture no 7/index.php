<?php 


include "autoLF.php";

$three=new Three;
$three->mythree();

$one=new One;
$one->myone();

$two=new Two;
$two->mytwo();

$mycon=new Database;

$mycon->connection();




 ?>