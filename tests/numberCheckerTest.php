<?php
use PHPUnit\Framework\TestCase;

final class NumberCheckerTest extends TestCase{

    

    public function testIsEven(){
        $numero = new NumberChecker(4);
        $this->assertTrue($numero->isEven());
        $numero2 = new NumberChecker(-3);
        $this->assertTrue($numero2->isEven());
    }

    public function testIsPositive(){
        $numero = new NumberChecker(4);
        $this->assertTrue($numero->isPositive());
        $numero2 = new NumberChecker(-3);
        $this->assertTrue($numero2->isPositive());
    }
}

?>