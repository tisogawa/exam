<?php

use Exam\Service\Foo;
use Exam\Service\Bar;

class ExamTest extends PHPUnit_Framework_TestCase
{
    public function testFoo()
    {
        $instance = new Foo();
        $this->assertEquals('Exam\Service\Foo::doSomething', $instance->doSomething());
    }

    public function testBar()
    {
        $instance = new Bar();
        $this->assertEquals('Exam\Service\Bar::doSomething', $instance->doSomething());
    }
}
