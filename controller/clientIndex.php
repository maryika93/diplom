<?php
include 'model/Answer.php';
include 'model/Category.php';
include 'model/Question.php';
include 'model/User.php';

$twig = twig();
$db = db();
$answer = new Answer();
$category = new Category();
$Question = new Question();
$categories  = $category -> selectCategories();
$questions = $Question -> selectQuestions();
$answers = $answer -> selectAnswers();

echo $twig->render('index.twig', array('categories' => $categories, 'questions' => $questions, 'answers' => $answers));

if(!empty($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $questions = $_POST['question'];
    $date = date("y.m.d.H:i:s");
    $category = $_POST['categoryID'];
    $question = $Question -> insertUsersQuestion($name, $email, $questions, $date, $category);
}