<?php

namespace App\Models;

use App\Models\Invoices;
use App\Models\Transactions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Warehouses extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function sellers(){
        return  $this->belongsToMany(Seller::class, 'warehouse_id');
    }

    public function products(){
        return $this->hasMany(Products::class);
    }

    public function transactions(){
        return $this->hasMany(Transactions::class);
    }

}
