<?php

namespace App\Models;

use App\Models\Shop;
use App\Models\User;
use App\Models\Invoices;
use App\Models\Products;
use App\Models\Warehouses;
use App\Models\Transactions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seller extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function shops(){
        return $this->belongsTo(Shop::class);
    }

    public function products(){
        return $this->hasMany(Products::class);
    }

    public function transactions(){
        return $this->hasMany(Transactions::class);
    }

    public function warehouses(){
        return  $this->belongsToMany(Warehouses::class, 'seller_id');
    }

}
