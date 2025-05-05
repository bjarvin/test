<?php  /* vis-alle-poststeder */
/*
/*  Programmet skriver ut alle registrerte poststeder
*/
  include("db-tilkobling.php");  /* tilkobling til database-serveren utf�rt og valg av database foretatt */
  
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

  $sqlSetning="CREATE TABLE IF NOT EXISTS klasse (klassekode CHAR(5) NOT NULL PRIMARY KEY,klasssenavn VARCHAR(50) NOT NULL,studiumkode VARCHAR(50) NOT NULL);";
   
  $sqlResultat=mysqli_query($db,$sqlSetning);
    /* SQL-setning sendt til database-serveren */
 
  print("tabell opprettet");
?>