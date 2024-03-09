<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
    'title',
     'description',
      'image',
       'normal_price',
       'VIP_price',
       'date',
       'lieu',
       'places',
       'user_id',
       'category_id',
       'status',
       'event_time',
       'reservation_approval'

    ];

   

public function category (){
    return $this->belongsTo(Category::class);
}
public function creator()
{
    return $this->belongsTo(User::class, 'user_id');
}

}
