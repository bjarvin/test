<?php  /* vis-alle-poststeder */
/*
/*  Programmet skriver ut alle registrerte poststeder
*/  
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include("db-tilkobling.php");  /* tilkobling til database-serveren utf�rt og valg av database foretatt */


  $sqlSetning="CREATE TABLE poststed (postnr CHAR(4) NOT NULL, poststed VARCHAR(30) NOT NULL, PRIMARY KEY (postnr));";
   
  
  $sqlResultat=mysqli_query($db,$sqlSetning);
    /* SQL-setning sendt til database-serveren */
 
  print("tabell opprettet");
?>