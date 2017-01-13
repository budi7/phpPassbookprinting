<?php

namespace App\Http\Controllers\Passbook;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class printController extends Controller
{
    //controller print passbook  

    public function printBook()
    {
    	$datas		= 	[
    						0 => [
    								'no' 	=> '1',
    								'code' 	=> 'AUD',
    								'date'	=> '12 january 2017',
    								'debit'	=> 'Rp. 10.000;',
    								'credit'=> '',
    								'saldo'	=> 'Rp. 20.000;',
    							 ],
    						1 => [
    								'no' 	=> '2',
    								'code' 	=> 'AUD',
    								'date'	=> '12 january 2017',
    								'debit'	=> 'Rp. 10.000;',
    								'credit'=> '',
    								'saldo'	=> 'Rp. 30.000;',
    							 ],    
    						2 => [
    								'no' 	=> '3',
    								'code' 	=> 'AUD',
    								'date'	=> '12 january 2017',
    								'debit'	=> 'Rp. 10.000;',
    								'credit'=> '',
    								'saldo'	=> 'Rp. 40.000;',
    							 ],   
                            3 => [
                                    'no'    => '4',
                                    'code'  => 'AUD',
                                    'date'  => '12 january 2017',
                                    'debit' => 'Rp. 10.000;',
                                    'credit'=> '',
                                    'saldo' => 'Rp. 20.000;',
                                 ],
                            4 => [
                                    'no'    => '5',
                                    'code'  => 'AUD',
                                    'date'  => '12 january 2017',
                                    'debit' => 'Rp. 10.000;',
                                    'credit'=> '',
                                    'saldo' => 'Rp. 30.000;',
                                 ],    
                            5 => [
                                    'no'    => '6',
                                    'code'  => 'AUD',
                                    'date'  => '12 january 2017',
                                    'debit' => 'Rp. 10.000;',
                                    'credit'=> '',
                                    'saldo' => 'Rp. 40.000;',
                                 ],
                            6 => [
                                    'no'    => '7',
                                    'code'  => 'AUD',
                                    'date'  => '12 january 2017',
                                    'debit' => 'Rp. 10.000;',
                                    'credit'=> '',
                                    'saldo' => 'Rp. 40.000;',
                                 ],  
                            7 => [
                                    'no'    => '8',
                                    'code'  => 'AUD',
                                    'date'  => '12 january 2017',
                                    'debit' => 'Rp. 10.000;',
                                    'credit'=> '',
                                    'saldo' => 'Rp. 40.000;',
                                 ],
                            8 => [
                                    'no'    => '9',
                                    'code'  => 'AUD',
                                    'date'  => '12 january 2017',
                                    'debit' => 'Rp. 10.000;',
                                    'credit'=> '',
                                    'saldo' => 'Rp. 40.000;',
                                 ],                                                                                                                                                                                            							 							 
    					];

    	// format transformer pakai config untuk data kiiman yang akan dikirimkan

        return view('passbook.print', ['datas' => $datas, 'flag' => '6']);
    }    
}
