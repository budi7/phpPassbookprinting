<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class LoanTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function testIndex()
    // {
    // 	var_dump('Loan Index Tested!');
    //     $this->visitRoute('loan.index');
    // }

    // public function testCreate()
    // {
    // 	var_dump('Loan Create Tested!');
    //     $this->visitRoute('loan.create');
    // }  

    public function testStore()
    {
        $this->visitRoute('loan.create')
	        ->type('budi', 'name')
	        ->type('bu', 'ammount')
			->press('Register');
    	var_dump('Loan Store Tested!');
    }       
}
