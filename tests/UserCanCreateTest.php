<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserCanCreateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateUser()
    {
        $this->visit('/Users/create')
	        ->type('1', 'role_id')
	        ->type('Daniel', 'firstname')
	        ->type('Becerra', 'lastname')
	        ->type('daniel@hotmail.com', 'email')
	        ->type('danielbecerrao', 'user')
	        ->type('12345678', 'password')
	        ->type('12345678', 'register')
	        ->press('Crear')
	        ->seePageIs('/Users');

    }
}
