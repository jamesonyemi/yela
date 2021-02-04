<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChargesPerLocation extends Model
{
    use HasFactory;

    protected   $table      =   "charges_per_location";
    protected   $primaryKey =   "id";
    protected   $fillable   =   ['country_of_sender', 'country_of_receiver', 'approved_amt', 'is_active', 'is_deleted'];
    
}
