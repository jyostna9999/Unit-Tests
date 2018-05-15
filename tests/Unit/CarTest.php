<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testYearDataType()
    {
        $car= Car::all()->first();
       // dd(gettype($car->year));
        $this->assertInternalType("string",$car->year);
    }
    public function testInsertCar()
    {
        $car = new Car();
        $car->make = "Honda";
        $car->model= "Accord EXL";
        $car->year= 2017;
        $this->assertTrue($car->save());
        $this->assertInternalType('int',$car->year);
    }
    public function testUpdateCarYear()
    {
        $car = Car::all()->last();
        //dd($car);
        //$car->year ='2000'; To directly assign a value
        $car->where('id', '51')
            ->update(['year' => 2000]);
        $this->assertTrue($car->save());
    }
    //car year daatype is int
    public function testCarYearDataType()
        {
            $car = Car::find(1);
            //dd($car->year);
           dd(gettype($car->year));
            $this->assertInternalType('string',$car->year);
        }
    public  function  testCarModelDataType()
    {
        $car = Car::inRandomOrder()-> first();
        //dd($car);
        $this->assertInternalType('string',$car->model);

    }
}
