<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Faker\Generator as Faker;

class UsersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserTest()
    {
        $user = User::inRandomOrder() -> first();
        $this-> assertInternalType("int",$user->id);
        $this-> assertInstanceOf("App\User",$user);
    }
    public function testUserCountTest()
    {
        $user = User::all();
       $this-> assertGreaterThanOrEqual(0, count($user));
        $this-> assertEquals(50,count($user));
        $this-> assertLessThanOrEqual(51,count($user));
    }

    public function testExampleTest()
    {
        $user = User::inRandomOrder()-> first();
        //dd($user);
        $this-> assertContains("@",$user->email);
    }
    public function testDirectoryPathTest()
    {

        $this-> assertDirectoryExists('/home/jyostna/PhpstormProjects/DataBaseSeedAndUnitTest/tests/Unit');
        $this-> assertDirectoryIsReadable('/home/jyostna/PhpstormProjects/DataBaseSeedAndUnitTest/tests/Unit');
        $this-> assertDirectoryIsWritable('/home/jyostna/PhpstormProjects/DataBaseSeedAndUnitTest/tests/Unit');
    }
    public function testAddUserTest()
    {
        $user = new User();
        $faker = new Faker();
        $user->name ='Jyostna Ummadisetty';
        $user->email = 'ju36@njit.edu';
        $user->password ='12345';
        $this -> assertTrue($user->save());
    }

    public function testDeleteUser()
    {
        $user = User::all()->last();
        //dd($user);
        $this -> assertTrue($user->delete());
    }

    public function testUpdateUserName()
    {
        $user = User::inRandomOrder() -> first();
        $user->name ='Steve Smith';
        $this -> assertTrue($user->update());
    }
    public function testUpdate()
    {
        $user = User::find(1);
        //dd($user);
        $user->name = 'Keith Williams';
        $this->assertTrue($user->update());
    }
}
