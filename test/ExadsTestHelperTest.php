<?php
require_once ('PHPUnit/Framework/TestCase.php');

final class ExadsTestHelperTest extends PHPUnit_Framework_TestCase{
    public function testfizzBuzz(): void
    {
        $fizzBuzzArray = ExadsTestHelper::fizzBuzz();
        $this->assertEquals("FizzBuzz", $fizzBuzzArray["14"]);
        $this->assertEquals("Fizz", $fizzBuzzArray["2"]);
        $this->assertEquals("Buzz", $fizzBuzzArray["4"]);
    }

    public function testarrayWith500ElementsTest(): void
    {        
        $this->assertNotNull(ExadsTestHelper::arrayWith500Elements());
    }

    public function testDataBaseConnectivityTest(): void
    {      
         $this->assertNotNull(ExadsTestHelper::dataBaseConnectivity());
    }
    
    public function testDateCalculationTest(): void
    {      
        $expectedDate = new DateTime('13-12-2017 20:00:00');
        $this->assertEquals(ExadsTestHelper::dateCalculation('12-12-2017 20:00:00'), $expectedDate);
    }
    
    public function testABTestingTest(): void
    {      
         $this->assertNotNull(ExadsTestHelper::ABTesting());
    }
}
