<?php

//predefined questions and correct answer.
$questions = [

    ['question' => 'What is 2 + 2?', 'correct' => '4'],
    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],
    ['question' => 'Who wrote "Hamlet"?', 'correct' => 'Shakespeare'],
];

//Collect answers from the user:

$answers = [];
foreach ($questions as $index => $question) {
    echo ($index + 1) . " . " . $question['question'] . "\n";
    $answers[] = trim(readline("Your answer : "));
}

//Evaluate function and user's score
function evaluateQuiz(array $questions, array $answers): int
{
    $score = 0;
    foreach ($questions as $index => $question) {
        if ($answers[$index] === $question['correct']) {
            $score++;
        }
    }
    return $score;
}

//calculates the score.
$score = evaluateQuiz($questions, $answers);
echo "\nYou scored $score out of " . count($questions) . ".\n";

//feedback based on performance:
if ($score === count($questions)) {
    echo "Excellent job!\n";
} elseif ($score > 1) {
    echo "Good effort!\n";
} else {
    echo "Better luck next time!\n";
}