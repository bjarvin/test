<?php  /* db-tilkobling */
/*
/*  Programmet foretar tilkobling til database-server og valg av database
*/
include("db-tilkobling.php");

 $sqlSetning="CREATE TABLE klasse (klassekode CHAR(5) NOT NULL,klasssenavn VARCHAR(50) NOT NULL,studiumkode VARCHAR(50) NOT NULL,PRIMARY KEY (klassekode));";
  
 $sqlResultat=mysqli_query($db,$sqlSetning);
   /* SQL-setning sendt til database-serveren */

 print("tabell opprettet");
?>






