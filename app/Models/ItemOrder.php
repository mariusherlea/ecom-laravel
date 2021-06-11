<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ItemOrder extends Pivot
{
    //

    protected $fillable=[
        'item_id',
        'order_id',
        'qt'
    ];

    static public function create($orderId,$itemId,$qt){
        $order = Order::find($orderId);
        $item = Item::find($itemId);
        $order->items()->attach($item, ['qt' => $qt]);
    }
}
