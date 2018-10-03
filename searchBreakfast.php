<?php
require 'includes/helpers.php';
require 'Food.php';
require 'Form.php';
use p2\Food;
session_start();

# Instantiate our objects
$food = new Food('meal.json', 'drink.json');
$form = new DWA\Form($_POST);

# Get data from form request
$mealChosenInForm = $_POST['meal'];
$drinkChosenInForm = $_POST['drink'];

# Get data from form request after validation
$userName = $form->get('name');

$errors = $form->validate([
    'name'=>'required|alphaNumeric',
    'meal'=>'required',
    'drink'=>'required',

]);

if(!$form->hasErrors){
    $food1 = $food->getMealCalorie($mealChosenInForm);
    $drink1 = $food->getDrinkCalorie($drinkChosenInForm);
    $total = $food->getTotalCalorie($mealChosenInForm, $drinkChosenInForm);
}



$_SESSION['results']=[
    'errors'=>$errors,
    'hasErrors'=>$form->hasErrors,
    'mealChosenInFormCalorie' => $food1,
    'meal'=> $mealChosenInForm,
    'drinkChosenInFormCalorie' => $drink1,
    'drink'=>$drinkChosenInForm,
    'total'=>$total,
    'userName' =>$userName
];

#Redirect back to the form
header('Location: index.php');
