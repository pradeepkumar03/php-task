<?php
$numberOfQuestions = readline("How many questions would you like to answer: ");
echo "I will give you a total of $numberOfQuestions questions.\n";
$questionset=[];
for($i=1;$i<=$numberOfQuestions;$i++)
{
    $a=rand(20,50);
    $b=rand(10,40);
    $question=$a."+".$b."=?";
    echo"$question";
    $answer=$a+$b;
    $useranswer=readline();`
    $booleananswer=($answer==$useranswer)?($booleananswer="True"):($booleananswer="False");
    array_push($questionset,[$a,$b,$answer,$useranswer,$booleananswer]);
 

}   
    echo"\n YOUR SCORECARD:";
    foreach($questionset as $index => $newarray){
        print_r($newarray);
        echo "\n";
        
    }
   ?>