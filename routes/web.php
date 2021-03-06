<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemOrderController;
use App\Http\Controllers\OrderController;
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
/*
//Account
Route::get('/createAccount/{name}/{email}', function ($name, $email) {
    $account = new Account(['name' => $name, 'email' => $email]);
    $account->save();
});

//Order
Route::get('/createOrder/{accountId}', function ($accountId) {
    $account = Account::findOrFail($accountId);
    $account->orders()->save(new Order());
});

//Item
Route::get('/createItem/{name}/{price}/{stock}', function ($name, $price, $stock) {
    $item = new Item(['name' => $name, 'price' => $price, 'stock' => $stock]);
    $item->save();
});

//Item to order


Route::get('/addItemToOrder/{orderId}/{itemId}/{qt}', function ($orderId, $itemId, $qt) {
    $order = Order::find($orderId);
    $item = Item::find($itemId);
    $order->items()->attach($item, ['qt' => $qt]);
});

Route::get('/read/{orderId}',
    function ($orderId) {
        $order = Order::findOrFail($orderId);
        static $total = 0;
        foreach ($order->items as $item) {
            echo ($item->name) . ' price: ';
            echo ($item->price) . '<br>'.' quantity: ';
            echo ($item->pivot->qt) .'<br>'. ' Item price: ';
            $price = (($item->price) * ($item->pivot->qt));
            echo $price . '<br>';

            $total = $total + $price;
        }
        echo 'ShopCart Total: ' . $total;
    });


Route::resource('account', AccountController::class);

Route::get('/contact/{id}/{name}', [AccountController::class, 'contact']);*/

/*Route::get('/update/{orderId}', function ($orderId) {
    $order = Order::findOrFail($orderId);

    if ($order->has('items')) {
        foreach ($order->items as $item) {
            if ($item->name == 'ou') {

                $item->name = 'ouale';
                $item->save();
            }
        }
    }
});

Route::get('/attach/{itemId}', function ($itemId) {
    $order = Order::findOrFail(1);
    $order->items()->attach($itemId);
});
Route::get('/detach', function () {
    $order = Order::findOrFail(1);
    $order->items()->detach();
});

Route::get('/sync', function (){
   $order=Order::findOrFail(1);
   $order->items()->sync([1,2]);
});*/

Route::resource('account', AccountController::class);


Route::resource('item', ItemController::class);


Route::resource('order', OrderController::class);

Route::resource('itemOrder', ItemOrderController::class);
