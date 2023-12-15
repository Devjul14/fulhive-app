<?php

namespace App\Models;

use App\Models\Seller;
use App\Models\Warehouses;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function sellers(){
        return $this->belongsTo(Seller::class);
    }

    public function transactions(){
        return $this->belongsTo(Transactions::class);
    }

    public function warehouses(){
        return $this->belongsTo(Warehouses::class);
    }

    public function categories(){
        return $this->belongsTo(ProductCategory::class);
    }
}
