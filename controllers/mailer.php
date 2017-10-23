<?php
//
//$postdata = file_get_contents("php://input");
//    $request = json_decode($postdata);
//    $user_email = $request->userEmail;
//    $todays_date = $request->todaysDate;
//    $time = $request->timeNow;
//    $question1 = $request->question1;
//    $question2 = $request->question2;
//    $question3 = $request->question3;
//    $question4 = $request->question4;
//    $question5 = $request->question5;
//    $question6 = $request->question6;
//    $question7 = $request->question7;
//    $question8 = $request->question8;
//    $question9 = $request->question9;
//    $question10 = $request->question10;
//    $endResult = $request->endResult;
//
//
//$message = "
//<html>
//<head>
//<title>Your ARQI Survey Results</title>
//</head>
//<body>
//<p>Thank you for taking the ARQI Survey. Your results are as follows:</p>
//<table>
//<tr>
//<th>Your Email</th>
//<th>Today's Date</th>
//<th>The Current Time</th>
//<th>Question 1</th>
//<th>Question 2</th>
//<th>Question 3</th>
//<th>Question 4</th>
//<th>Question 5</th>
//<th>Question 6</th>
//<th>Question 7</th>
//<th>Question 8</th>
//<th>Question 9</th>
//<th>Question 10</th>
//<th>End Decision</th>
//</tr>
//<tr>
//<td>$user_email</td>
//<td>$todays_date</td>
//<td>$time</td>
//<td>$question1</td>
//<td>$question2</td>
//<td>$question3</td>
//<td>$question4</td>
//<td>$question5</td>
//<td>$question6</td>
//<td>$question7</td>
//<td>$question8</td>
//<td>$question9</td>
//<td>$question10</td>
//<td>$endResult</td>
//</tr>
//</table>
//</body>
//</html>
//";
//
//
//$to = 'derek.merrikin@fmc-na.com';
//$subject = 'ARQI Survey Results';
//$headers = array('Content-Type: text/html; charset=UTF-8');
// 
//wp_mail( $to, $subject, $message, $headers );
wp_mail( 'me@example.net', 'The subject', 'The message' );



?>