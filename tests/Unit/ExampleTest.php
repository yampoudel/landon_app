<?php

namespace Tests\Unit;

use App\Title;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    /*public function testTitleModelCount()
    {
        $titles = new Title();
        $this->assertTrue(count($titles->all()) == 6, 'It should have 6 titles');
        //$value = 1;
        //$this->assertTrue(1 === $value, 'Value should be 1');
    }

    public function testLastTitleShouldBeProfessor()
    {
        $titles = new Title();
        $titles_array = $titles->all();
        $this->assertEquals('Professor', array_pop($titles_array), 'Titles last elements should be Professor');
    }*/
}
