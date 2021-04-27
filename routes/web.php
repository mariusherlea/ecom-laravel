<?php

use App\Models\Account;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/createAccount/{name}/{email}', function ($name,$email){
$account=new Account(['name'=>$name, 'email'=>$email]);
$account->save();
});


Route::get('/createOrder', function (){
    $account=Account::findOrFail(1);
    $account->orders()->save(new Order());
});

Route::get('/createItem/{name}/{price}/{stock}', function ($name,$price,$stock){
    $item=new Item(['name'=>$name, 'price'=>$price, 'stock'=>$stock]);
    $item->save();
});


Route::get('/addItemToOrder', function (){
    $order=Order::find(1);
    $item=Item::find(1);
    $order->items()->save($item);
});
