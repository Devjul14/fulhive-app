<?php

namespace App\Models;

use App\Models\Seller;
use App\Models\Invoices;
use App\Models\Products;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transactions extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function sellers(){
        return $this->belongsTo(Seller::class);
    }

    public function products(){
        return $this->hasMany(Products::class);
    }

    public function warehouses(){
        return $this->belongsTo(Warehouses::class);
    }

    public function invoices(){
        return $this->belongsTo(Invoices::class);
    }
}
