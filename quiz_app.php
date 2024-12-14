<?php 
// Questions array 
$questions = [
    ['question'=>'What is 2 + 2?','correct'=>'4'],
    ['question'=>'What is the capital of France?','correct'=>'Paris'],
    ['question'=>'Who wrote "Hamlet"?','correct'=>'Shakespeare']
];
// Getting answer from user
foreach($questions as $index => $question){
    echo $index + 1 .".".$question['question']."\n";
    $answers[] = trim(readline("Your answer = "));
}
// Counting score 
function evaluateQuiz(array $questions, array $answers):int{
    $score = 0;
    foreach($questions as $index => $question){
        if($question["correct"]===$answers[$index]){
            $score++;
        }
    }
    return $score;
}
$scores = evaluateQuiz($questions,$answers);

//Display result
echo "You scored $scores out of ".count($questions).".\n";

if($scores === count($questions)){
    echo "Excellent job!";
}elseif($scores>1){
    echo "Good effort!";
}else{
    echo "Better luck next time!";
}
?>