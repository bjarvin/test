<?php  /* db-tilkobling */
/*
/*  Programmet foretar tilkobling til database-server og valg av database
*/
$host = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$database = getenv('DB_DATABASE');

  $db=mysqli_connect($host,$username,$password,$database) or die ("ikke kontakt med database-server");
    /* tilkobling til database-serveren utført */
  print("tilkoblet db");

  $sqlSetning="CREATE TABLE klasse (klassekode CHAR(5) NOT NULL,klasssenavn VARCHAR(50) NOT NULL,studiumkode VARCHAR(50) NOT NULL,PRIMARY KEY (klassekode));";
  
  $sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; opprette tabell i databasen");
    /* SQL-setning sendt til database-serveren */

    print("tabell opprettet");
?>






