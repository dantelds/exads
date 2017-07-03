<?php
class Helper {
    static function fizzBuzz() {
        $fizzBuzzArray = [];
        for ($i = 1; $i <= 100; $i++){
            if ($i % 3 === 0 && $i % 5 === 0){
                array_push($fizzBuzzArray, "FizzBuzz");
            }
            else if($i % 3 === 0){
                array_push($fizzBuzzArray, "Fizz");
            }
            else if($i % 5 === 0){
                array_push($fizzBuzzArray, "Buzz");
            }
            else{
                 array_push($fizzBuzzArray, $i);
            }
        }
        return $fizzBuzzArray;
    }
}