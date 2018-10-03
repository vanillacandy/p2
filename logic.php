<?php

session_start();
$hasErrors = false;
if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $mealCalorie = $results['mealChosenInFormCalorie'];
    $drinkCalorie = $results['drinkChosenInFormCalorie'];
    $totalCalorie = $results['total'];
    $name = $results['userName'];
    $meal = $results['meal'];
    $drink = $results['drink'];
    $errors = $results['errors'];
    $hasErrors = $results['hasErrors'];
}

session_unset();




