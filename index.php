<?php
require 'includes/helpers.php';
require 'logic.php';
?>

<!DOCTYPE html>
<html lang='en'>
<head>

    <title>Breakfast</title>
    <meta charset='utf-8'>

    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'
          rel='stylesheet'
          integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO'
          crossorigin='anonymous'>

    <link href='/styles/app.css' rel='stylesheet'>

</head>
<body>

<section id='main'>
    <h1>Break-fast!</h1>

    <p>Break-fast is a small menu to for daily breakfast meal and it calculates meal calories. Search below for your favorite.</p>

    <form method='POST' action='searchBreakfast.php' >
        <div class='instructions'>
            * Required
        </div>

        <label> * What's your name?
            <input type='text' name='name' value='<?php if(isset($name)) echo $name ?>'>
        </label>

        <fieldset class='radios'>
            <legend> * Select a main meal for breakfast</legend>
            <ul class='radios'>
                <!-- Note that each radio has the same name of `day` -->
                <li><label><input type='radio'
                                  name='meal'
                                  value='omelet'> Cheese Omelet </label>
                <li><label><input type='radio'
                                  name='meal'
                                  value='french toast'> Cinnamon Raisin French Toast </label>
                <li><label><input type='radio'
                                  name='meal'
                                  value='chicken waffle'> Chicken and Waffle</label>
                <li><label><input type='radio'
                                  name='meal'
                                  value='breakfast bowl'> Country Breakfast Bowl </label>
                <li><label><input type='radio'
                                  name='meal'
                                  value='ham eggs'> Ham and Eggs</label>
            </ul>
        </fieldset>

        <label for='drink'> * Select a drink </label>
        <select name='drink' id='drink'>
            <option value='choose'>Choose one...</option>
            <option value='milk'>Milk</option>
            <option value='chocolate milk'>Chocolate milk</option>
            <option value='soy milk'>Soy milk</option>
            <option value='orange juice'>Orange juice</option>
            <option value='apple juice'>Apple juice</option>
        </select>

        <!-- Trick to makes it so that if no checkboxes are selected, we still receive form data -->
        <input type='hidden' name='submitted' value='1'>


        <input type='submit' value='Search' class='btn btn-primary'>

        <?php if ($hasErrors): ?>
            <div class='alert alert-danger'>
                <lu>
                    <?php foreach ($errors as $error): ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </lu>
            </div>
        <?php endif ?>
    </form>
    <?php if (!$hasErrors): ?>
        <?php if (isset($name) && isset($meal) && isset($drink) && isset($totalCalorie)) : ?>
            <div class='alert alert-primary' role='alert'>
                Hello <?= $name ?>! <br/>
                You selected <?= $meal ?> and <?= $drink ?> for breakfast.
            </div>
            <div class='alert alert-success' role='alert'>
                Total calorie will be <?= $totalCalorie ?>.
            </div>
        <?php endif; ?>
    <?php endif; ?>
</section>

<footer>
    <a href='https://github.com/vanillacandy/p2'>View this project on Github</a>
</footer>

</body>
</html>