<?php
$numberOfQuestions = readline("How many questions would you like to answer: ");
echo "I will give you a total of $numberOfQuestions questions.\n";
$questionset=array("question"=>array(),"correctanswer"=>array(),"useranswer"=>array());
$score=0;
for($i=1;$i<=$numberOfQuestions;$i++)
{
    $a=rand(20,50);
    $b=rand(10,40);
    $question=$a."+".$b."=?";
    echo"$question";
    array_push($questionset['question'],$question);
    $answer=$a+$b;
    array_push($questionset['correctanswer'],$answer);
    $useranswer=readline();
    array_push($questionset['useranswer'],$useranswer);
  
    if($answer==$useranswer)
    {
        $score++;
    }
}
    echo"\n YOUR SCORECARD:";
  
   for($i=0;$i<$numberOfQuestions;$i++)
   {
    echo"\n". ($i+1) . "." . $questionset['question'][$i];
    echo"\n your answer is:".$questionset['useranswer'][$i];
    echo"\n correct answer is: ".$questionset['correctanswer'][$i];
    echo"\n";
   }
   echo"\n Your total score is $score";
   ?>