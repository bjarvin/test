<?php     /* Eksempel 4 */
/*
/*    Programmet mottar fra et HTML-skjema et svar p� sp�rsm�let "Er du student (j/n) ?"
/*      og et svar p� sp�rsm�let "Hvor gammel er du ?"
/*    Programmet sjekker hva som er svart p� sp�rsm�lene og skriver ut en passende melding
*/
  $student=$_POST ["student"];
  $alder=$_POST ["alder"]; 
	
  if (!$student or !$alder)  
    {   
      print("Du har ikke svart p� begge sp�rsm�lene ");
    }
  else if ($student == "j" and $alder < 20)  
    {   
      print("Du er student og er under 20 �r ");
    }
  else if ($student == "j" and $alder >= 20)  
    {   
      print("Du er student og er 20 �r eller mer ");
    }
  else if ($student == "n" and $alder < 20)
    {   
      print("Du er ikke student og er under 20 �r  ");
    }
  else if ($student == "n" and $alder >= 20)
    {   
      print("Du er ikke student og er 20 �r eller mer ");
    }
  else  
    {   
      print("Begge sp�rsm�lene har ikke gyldige svar");
    }
?>