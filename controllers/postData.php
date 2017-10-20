<?php

 $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $user_email = $request->userEmail;
    $todays_date = $request->todaysDate;
    $time = $request->timeNow;
    $question1 = $request->question1;
    $question2 = $request->question2;
    $question3 = $request->question3;
    $question4 = $request->question4;
    $question5 = $request->question5;
    $question6 = $request->question6;
    $question7 = $request->question7;
    $question8 = $request->question8;
    $question9 = $request->question9;
    $question10 = $request->question10;
    $endResult = $request->endResult;
    


$servername = "localhost";
$username = "dbPost";
$password = "password"; //Your User Password
$dbname = "arqi"; //Your Database Name


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO arqiResults (user_email, todays_date, time, question1, question2, question3, question4, question5, question6, question7, question8, question9, question10, endResult)
VALUES ($user_email, $todays_date, $time, $question1, $question2, $question3, $question4, $question5, $question6, $question7, $question8, $question9, $question10, 'NA')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>