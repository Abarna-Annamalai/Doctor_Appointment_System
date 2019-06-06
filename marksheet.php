<?php
$answer1=$answer2=$answer3=$answer4=$answer5=0;
$answer1=$_POST['question-1-answers'];
$answer2=$_POST['question-2-answers'];
$answer3=$_POST['question-3-answers'];
$answer4=$_POST['question-4-answers'];
$answer5=$_POST['question-5-answers'];
$total = 0;
if ($answer1=="A"){$total++;}
else
{
	
}
if ($answer2=="A"){$total++;}
if ($answer3=="A"){$total++;}
if ($answer4=="A"){$total++;}
if ($answer5=="A"){$total++;}
echo "<div id='results'>$total / 5 correct</div>";
}
?>
