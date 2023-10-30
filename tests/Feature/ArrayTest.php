<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArrayTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $this->withoutExceptionHandling();
        $this->post(route('students.store'), [
            'name' => 'Ali',
            'phone' => '012012102',
            'city' => 'test',
            'address' => 'test20',
            'wallet' => 10000,
        ]);
        // $this->replace(); reset data
        // index array
        // $data = [
        //     0 => 1,
        //     1 => 2,
        //     2 => 3,
        //     0 => 3,
        //     1 => 5,
        //     2 => 10,
        //     0 => 100,
        // ];
        // dd($data);
        ////////////////////////////////////////////////////
        // $this->merge(); overwrite data
        // associative array
        // $data = [
        //     'name' => 'Ahmed',
        //     'age' => 10,
        //     'name' => 'Taylor',
        // ];
        // dd($data);
    }
}
