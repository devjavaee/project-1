<?php
/* Anne bissextile si : 1- divisible par 4 mais non divisible  par 100. 2- divisible sur 400   */
 function is_leap_year($year){
	 if($year % 400 ==0)
		 return TRUE;
	 elseif($year % 100==0)
	 return FALSE;
	 elseif($year % 4==0)
	 return TRUE;
	 else
		 return FALSE;
 }
 
  $aa=is_leap_year(2024 );
  if($aa==TRUE)
	  echo"Annee bissextile";
  else 
	  echo"Annee non bissextile"; 
?>