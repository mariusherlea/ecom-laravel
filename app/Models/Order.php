<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['account_id'];

public function items(){
    return $this->belongsToMany(Item::class)->withPivot('qt');
}

   public function calculate($orderId) {
        $order = Order::findOrFail($orderId);
        $total = 0;
        foreach ($order->items as $item) {
            echo ($item->name) . ' price: ';
            echo ($item->price) . '<br>'.' quantity: ';
            echo ($item->pivot->qt) .'<br>'. ' Item price: ';
            $price = (($item->price) * ($item->pivot->qt));
            echo $price . '<br>';

            $total = $total + $price;
        }
        echo 'ShopCart Total: ' . $total;
    }

}
