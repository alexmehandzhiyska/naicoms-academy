<?php
$name = 'hermione granger';
$age = 20;
$avg_grade = 5.5;
$has_graduated = true;
$subjects_taken = array('english', 'math', 'computer science');

class Student {
    public $name;
    public $age;
    public $avg_grade;
}

$student1 = new Student($name, $age, $avg_grade);
$sth = null;

echo gettype($name);
echo '<br>';

echo gettype($age);
echo '<br>';

echo gettype($avg_grade);
echo '<br>';

echo gettype($has_graduated);
echo '<br>';

echo gettype($subjects_taken);
echo '<br>';

echo gettype($student1);
echo '<br>';

echo gettype($sth);
echo '<br>';
?>