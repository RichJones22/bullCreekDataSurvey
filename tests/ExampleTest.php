<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testHome()
    {
        $this->call('GET', '/');
        $this->assertResponseOk();
    }

    /** @test */
    public function testForm01()
    {
        // reset the test.
        DB::table('surveys')->delete();

        // insert test record.
        $this->visit('/')
            ->type('Rich Jones', 'name')
            ->type('jones_rich@yahoo.com', 'email')
            ->type('http://www.premisesoftware.com', 'website')
            ->type('This is a test', 'message')
            ->press('Submit Form');
    }
}
