<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;

class Donation extends Model
{
    use HasFactory, billable;

    protected $fillable = ["donator", "amount"];
}

