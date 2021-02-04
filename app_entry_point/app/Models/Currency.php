<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected   $table      =   "currency";
    protected   $primaryKey =   "id";
    protected   $fillable   =   ['symbol', 'short_name', 'long_name', 'is_active', 'is_deleted'];
}
