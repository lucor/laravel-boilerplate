<?php

// Sample test using AspectMock requires php >= 5.4
// @see https://github.com/Codeception/AspectMock#requirements

//use AspectMock\Test as test;
//
//class testUser extends \PHPUnit_Framework_TestCase
//{
//
//    protected function _after()
//    {
//        test::clean();
//    }
//
//    public function testGetAuthPassword()
//    {
//        $user = new User;
//        test::double('User',array('getAuthPassword' => '1234'));
//        $this->assertEquals('1234', $user->getAuthPassword());
//    }
//
//}

//Test using Mockery

use \Mockery as m;

class testUser extends \PHPUnit_Framework_TestCase
{

    protected function _after()
    {
        m::clean();
    }

    public function testGetAuthPassword()
    {
        $mock = m::mock('User');
        $mock->shouldReceive('getAuthPassword')->once()->andReturn('1234');
        $this->assertEquals('1234', $mock->getAuthPassword());
    }

}