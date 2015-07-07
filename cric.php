<?php
$total = 0;
$userchoice = $_GET["tossChoice"];                    //userchoice->bat or bowl
$sys = rand(1, 6);                                   //random score by comp
$shot = $sys;                                         //toggle batsman (user/sys)
$bat = $_GET["score"];                                //bat->user input score
if ($sys == $bat)                                 
{
 echo "\nOUT!";
 echo "The final score is $total";
}
elseif ( $userchoice == "B" )
 {
   $shot == $bat;
 }
 {
 
   switch ($shot)
{
  case 1 : $total = $total + 1;
           break; 
  case 2 : $total = $total + 2;
	   break;	
  case 3 : $total = $total + 3;
 	   break;
  case 4 : $total = $total + 4;
           break;
  case 5 : $total = $total + 5;
           break;
  case 6 : $total = $total + 6;
           break;
 }
 }
  
?>
 <form action ="cric.php" method="GET"><br>
  Toss B/b: <input type="text" name="tossChoice"><br>
 Enter your move: <input type="text" name="score"><br>
 <input type="submit" value="PLAY BALL"><br>
 </form>
