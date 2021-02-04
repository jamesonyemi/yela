<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryStatus extends Model
{
    use HasFactory;

    protected $table = 'delivery_status';
    protected $primaryKey = 'status_id';
    protected $fillable =  ['delivery_type','created_by'];
}
