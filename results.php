<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php

$question1 = $_POST["question1"];
$question2 = $_POST["question2"];
$question3 = $_POST["question3"];
$question4 = $_POST["question4"];
$question5 = $_POST["question5"];
$question6 = $_POST["question6"];
$question7 = $_POST["question7"];
$question8 = $_POST["question8"];
$question9 = $_POST["question9"];
$question10 = $_POST["question10"];
$right = 0;

if ($question1 === "Lily") {
	$right++;
}
if ($question2 === "Victoria") {
	$right++;
}
if ($question3 === "Quinn") {
	$right++;
}
if ($question4 === "Teacher") {
	$right++;
}
if ($question5 === "PLEASE") {
	$right++;
}
if ($question6 === "Wesleyan" ) {
	$right++;
}
if ($question7 === "Hockey") {
	$right++;
}
if ($question8 === "Stella") {
	$right++;
}
if ($question9 === "Tokyo" ) {
	$right++;
}
if ($question10 === "Lillypad") {
	$right++;
}


echo "You got $right/10";

?>

 </body>
</html>