<?php
include_once 'EntryClass.php';
$EntryClass =new entryclass();
$name= rand(111111,99999)."abcdxyz"; 
$password = "weareright";
$date_of_birth = date("h-i-s");
$EntryClass->addParticipant($name,$password,$date_of_birth);
