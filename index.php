<?php
include_once "./helpers/ExadsTestHelper.php";

$designClass = ExadsTestHelper::ABTesting();
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Exads Test</title>        
        <!-- Bootstrap core CSS -->
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        
        <link href="./css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container <?php echo $designClass; ?>">            
            <h1>1. FizzBuzz</h1>
            <br/>
            <p>
                Write a PHP script that prints all integer values from 1 to 100.
                For multiples of three output "Fizz" instead of the value and for the multiples of five output "Buzz".
                Values which are multiples of both three and five should output as "FizzBuzz".
            <pre>
                <?php
                print_r(ExadsTestHelper::fizzBuzz())
                ?>    
            </pre>    
        </p>
        <hr/>
        <h1>2. 500 Element Array</h1>
        <br/>
        <p>
            Write a PHP script to generate a random array of 500 integers (values of 1 – 500 inclusive).
            Randomly remove and discard an arbitary element from this newly generated array.
            Write the code to efficiently determine the value of the missing element.
            Explain your reasoning with comments.

        </p>
        <pre>
            <?php
            print_r(ExadsTestHelper::arrayWith500Elements())
            ?>    
        </pre> 

        <h1>3. Database Connectivity</h1>
        <br/>
        <p>
            Demonstrate with PHP how you would connect to a MySQL (InnoDB) database and query for all
            records with the following fields: (name, age, job_title) from a table called 'exads_test'.
            Also provide an example of how you would write a sanitised record to the same table.

        </p>
        <pre>
            <?php
            print_r(ExadsTestHelper::dataBaseConnectivity())
            ?>    
        </pre>   
        <hr/>
        <h1>2. 500 Element Array</h1>
        <br/>
        <p>
            Write a PHP script to generate a random array of 500 integers (values of 1 – 500 inclusive).
            Randomly remove and discard an arbitary element from this newly generated array.
            Write the code to efficiently determine the value of the missing element.
            Explain your reasoning with comments.

        </p>
        <pre>
            <?php
            print_r(ExadsTestHelper::arrayWith500Elements())
            ?>    
        </pre>   

        <h1>4. Date Calculation</h1>
        <br/>
        <p>
            The Irish National Lottery draw takes place twice weekly on a Wednesday and a Saturday at 8pm.
            Write a function or class that calculates and returns the next valid draw date based on the current
            date and time AND also on an optionally supplied date and time.
        </p>
        <pre>
            <?php
            print_r(ExadsTestHelper::dateCalculation())
            ?>    
        </pre>  
        <p>
            <b>optionally supplied date and time</b>

        </p>
        <pre>
            <?php
            print_r(ExadsTestHelper::dateCalculation("2017-12-10"))
            ?>    
        </pre>   
        <hr/>

        <h1>5. A/B Testing</h1>
        <br/>
        <p>
            Exads would like to A/B test a number of promotional designs to see which provides the best
            conversion rate.
            <br/>
            Write a snippet of PHP code that redirects end users to the different designs based on the database
            table below. Extend the database model as needed.
            i.e. - 50% of people will be shown Design A, 25% shown Design B and 25% shown Design C.
            The code needs to be scalable as a single promotion may have upwards of 3 designs to test.

        </p>
        <pre>
            <?php
            echo $designClass;
            ?>    
        </pre>   
        <hr/>
    </div>
</body>
</html>