<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    //
    protected $fillable=[
        'customer_id',
        'fund_name',
        'description',
        'nav',
        'acquired_date',

    ];
    
    public function customer() {
        return $this->belongsTo('App\Customer');
    }
}
