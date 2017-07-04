<?php

class ExadsTestHelper {

    static function fizzBuzz() {
        $fizzBuzzArray = [];
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 === 0 && $i % 5 === 0) {
                array_push($fizzBuzzArray, "FizzBuzz");
            } else if ($i % 3 === 0) {
                array_push($fizzBuzzArray, "Fizz");
            } else if ($i % 5 === 0) {
                array_push($fizzBuzzArray, "Buzz");
            } else {
                array_push($fizzBuzzArray, $i);
            }
        }
        return $fizzBuzzArray;
    }

    static function arrayWith500Elements() {
        $arrayWith500Elements = range(1, 500);
        shuffle($arrayWith500Elements);
        unset($arrayWith500Elements[rand(0, 499)]);
        /*
         * the sum of both arrays are the same
         * if you subtract the sum of both array you gonna have the removed element
         */
        $missingElement = array_sum(range(1, 500)) - array_sum($arrayWith500Elements);
        return $missingElement;
    }

    static public function dataBaseConnectivity() {
        try {
            $dbConnection = new PDO('mysql:host=127.0.0.1:3306;dbname=exads', 'root', '');
            $selectQuery = $dbConnection->prepare("SELECT name,age,job_title FROM exads_test");
            $selectQuery->execute();
            $results = $selectQuery->fetchAll();
            $person = ["name" => "John Doe", "age" => 20, "job_title" => "salesman"];
            $insertQuery = $dbConnection->prepare("INSERT INTO exads_test (name,age,job_title) VALUES (:name,:age,:job_title);");
            $insertQuery->bindParam(":name", $person["name"], PDO::PARAM_STR, 255);
            $insertQuery->bindParam(":age", $person["age"], PDO::PARAM_INT, 3);
            $insertQuery->bindParam(":job_title", $person["job_title"], PDO::PARAM_STR, 255);
            $insertQuery->execute();
            return $results;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    static public function dateCalculation($specifDate = null){
        $currentDate = new DateTime($specifDate);
        $currentDate->modify('this day 20:00');
        $wednesdayDraw = clone $currentDate;
        $saturdayDraw = clone $currentDate;
        $wednesdayDraw->modify(('wednesday 20:00'));
        $saturdayDraw->modify(('saturday 20:00'));
        return $currentDate < $wednesdayDraw ? $wednesdayDraw : $saturdayDraw;
    }
    
    static function ABTesting(){
        try {
            $dbConnection = new PDO('mysql:host=127.0.0.1:3306;dbname=exads', 'root', '');
            $selectQuery = $dbConnection->prepare("SELECT design_id,design_name,split_percent FROM design");
            $selectQuery->execute();
            $designs = $selectQuery->fetchAll();
            $chosenDesign = rand(1, 100);
            $percentSum = 0;
            for($i = 0; $i < count($designs); $i++){
                $percentSum += $designs[$i]["split_percent"];
                if($percentSum > $chosenDesign){
                    return $designs[$i]['design_name'];
                }            
            }
           
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

}