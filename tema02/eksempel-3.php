<?php     /* Eksempel 3 */
/*
/*    Programmet mottar fra et HTML-skjema et svar p� sp�rsm�let "Er du student (j/n) ?"
/*    Programmet sjekker om det er svart j eller n p� sp�rsm�let og skriver ut en passende melding
*/
  $svar=$_POST ["svar"];
	
  if (!$svar)  
    {
      print("Du har ikke svart p� sp�rsm�let om du er student ");
    }
  else if ($svar == "j")  
    {
      print("Du har svart j p� sp�rsm�let om du er student ");
    }
  else if ($svar == "n") 
    {
      print("Du har svart n p� sp�rsm�let om du er student ");
    }
  else  
    {
      print("Du har ikke svart j eller n p� sp�rsm�let om du er student ");
    }
?>