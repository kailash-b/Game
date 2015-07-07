<?php

echo "Comp lets play handcricket"<br>;
$computer=rand(1,6);
//For toss
$even=rand(2,4,6);
$odd=rand(1,3,5);
$text1="Computer batting";
$text2="Player batting";
if($computer==$even)
{
echo "$text1"<br>;
}
else
{
echo "$text2"<br>;
}

//count scores
if($text1)
{
$initial=0;
while($computer!=0)
{
if($computer!=$get["number"])
{
$initial=$initial+$computer;
}
else
{
echo "Comp out"<br>;
$comp=$initial;
echo "Total score of comp is $comp";
exit();
}
}
}


if($text2)
{
$initial=0;
while($get["number"]!=0)
{
if($get["number"]!=$computer)
{
$initial=$initial+$get["number"];
}
else
{
echo "player out"<br>;
$play=$initial;
echo "Total scsore of player is $play";
}
}
}

if($comp>$play)
{
echo "Comp wins";
}
else
{
echo "Player wins";
}

?>

<form action ="" method="get"><br>
choice: <input type="text" name="number"><br>
</form>


