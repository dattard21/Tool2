<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get('/', array('as' => 'quote', 'uses' => 'quote\\Quotes@getIndex'));
Route::get('quote', array('as' => 'quote', 'uses' => 'quote\\Quotes@getIndex'));
Route::post('quote_generate',array('as'=>'quoteGenerate','uses'=>'quote\\Quotes@generateQuote'));
Route::get('test',array('as'=>'test','uses'=>'quote\\Quotes@test'));







