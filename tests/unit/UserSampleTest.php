<?php
use AspectMock\Test as test;

class testUser extends \PHPUnit_Framework_TestCase
{

    protected function _after()
    {
        test::clean();
    }

    // tests
    public function testGetAuthPassword()
    {
        $user = new User;
        test::double('User',['getAuthPassword' => '1234']);
        $this->assertEquals('1234', $user->getAuthPassword());
    }

}