<?php


use App\app\Facades\Animal\AnimalFacade;

require_once './vendor/autoload.php';

$animals = (new AnimalFacade())->getAnimals('src/data/animals.json');

//echo $animals->allAgeAverage().'<br/>';
//echo $animals->allAgeSum().'<br/>';
//echo $animals->dogsAgeAverage().'<br/>';
//echo $animals->getRandomDogSound().'<br>';

$randomDog = $animals->getRandomDog();
//echo $randomDog->makeNoise().'<br/>';

echo '<pre>';
print_r($randomDog);
echo '</pre>';
