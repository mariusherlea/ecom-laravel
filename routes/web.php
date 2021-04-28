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

//Account
Route::get('/createAccount/{name}/{email}', function ($name,$email){
$account=new Account(['name'=>$name, 'email'=>$email]);
$account->save();
});

//Order
Route::get('/createOrder/{accountId}', function ($accountId){
    $account=Account::findOrFail($accountId);
    $account->orders()->save(new Order());
});

//Item
Route::get('/createItem/{name}/{price}/{stock}', function ($name,$price,$stock){
    $item=new Item(['name'=>$name, 'price'=>$price, 'stock'=>$stock]);
    $item->save();
});

//Item to order
Route::get('/addItemToOrder/{orderId}/{itemId}/{quantity}', function ($orderId,$itemId,$quantity){
    $order=Order::find($orderId);
    $item=Item::find($itemId);
    $order->relations()->save($item, ['quantity'=>$quantity]);
});

Route::get('/read/{orderId}',function ($orderId){
   $order = Order::findOrFail($orderId);
   foreach ($order->items as $item){
       echo($item->name).' ';
       echo ($item->price);
   }
});
