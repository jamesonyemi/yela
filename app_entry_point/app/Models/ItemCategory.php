<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemCategory extends Model
{
    use HasFactory;

    protected $table = 'item_categories';
    protected $primaryKey = 'id';
    protected $fillable =  ['cat_type', 'is_active', 'is_deleted'];
}
