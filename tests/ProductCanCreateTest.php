<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductCanCreateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateProduct()
    {
        $this->visit('/Products/create')
	        ->type('name', 'name')
	        ->type('1234567890', 'reference')
	        ->type('blue', 'color')
	        ->type('10000', 'purchasePrice')
	        ->type('15000', 'salePrice')
	        ->type('123', 'quantity')
	        ->press('Crear')
	        ->seePageIs('/Products');
    }
}
