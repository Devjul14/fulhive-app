<?php

namespace App\Models;

use App\Models\Seller;
use App\Models\Transactions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoices extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function transactions(){
        return $this->hasOne(Transactions::class);
    }

}
