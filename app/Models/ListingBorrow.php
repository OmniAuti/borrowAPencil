<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class ListingBorrow extends Model {

    use HasFactory;

     protected $table = 'listing_borrow';

     protected $fillable = ['location', 'category', 'type'];


   public function user() {
        return $this->belongsTo(User::class);
   }

}