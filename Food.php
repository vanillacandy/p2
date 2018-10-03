<?php

namespace p2;

class Food
{
    # Properties
    private $meal;
    private $drink;

    # Methods
    public function __construct($mealJson1, $drinkJson1)
    {
        # Load Food data
        $mealJson = file_get_contents($mealJson1);
        $drinkJson = file_get_contents($drinkJson1);
        $this->meal = json_decode($mealJson, true);
        $this->drink = json_decode($drinkJson, true);
    }

    public function getMeal()
    {
        return $this->meal;
    }

    public function getDrink()
    {
        return $this->drink;
    }

    public function getMealCalorie($mealChosenInForm)
    {
        return $this->meal[$mealChosenInForm]['calorie'];
    }

    public function getDrinkCalorie($drinkChosenInForm)
    {
        return $this->drink[$drinkChosenInForm]['calorie'];
    }

    public function getTotalCalorie($mealChosenInForm, $drinkChosenInForm)
    {
        return $this->drink[$drinkChosenInForm]['calorie'] + $this->meal[$mealChosenInForm]['calorie'];
    }

}