
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Question</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="question-display">
<?php


    //  Combining two arrays to create an associative array

    $questions = [
    "What is the capital of France?",
    "What is 2 + 2?",
    "Who wrote 'To Kill a Mockingbird'?",
    "What is the largest planet in our solar system?",
    "What is the chemical symbol for water?"
    ];
    $numbers = [1, 2, 3, 4, 5];

    $combine_questions = array_combine($numbers, $questions);

    // Getting Key Values from the combined array
    $keys = array_keys($combine_questions);

    // matching the  key value with the selected number and displaying the corresponding question
    $gettnum = $_GET['number'];
    if (isset($gettnum)) {
    $selected_number = $gettnum;
    if (array_key_exists($selected_number, $combine_questions)) {
        echo "Question: " . $combine_questions[$selected_number];
    } else {
        echo "Invalid number selected.";
    }
        } 
        else {
        echo "Please select a number to see the question.";
        }
    ?>
    <a href="index.html">Go Back</a>
 </div>

</body>
</html>
