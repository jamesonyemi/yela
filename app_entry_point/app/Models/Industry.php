<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;

    protected $table = 'industries';
    protected $primaryKey = 'id';
    protected $fillable =  ['industry_type', 'is_active', 'is_deleted', 'created_by'];
}
