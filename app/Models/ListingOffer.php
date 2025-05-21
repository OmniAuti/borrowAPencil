<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListingOffer extends Model
{
    protected $table = 'listing_offers ';

    protected $fillable = ['category', 'level', 'condition', 'details', 'zipcode'];

    public function user() {
        return $this->belongsTo(User::class);
   }
}
