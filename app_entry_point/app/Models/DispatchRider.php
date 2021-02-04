<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DispatchRider extends Model
{
    use HasFactory;

    protected $table      =   'dispatch_riders';
    protected $primaryKey =   'rider_id';
    protected $hidden     =   ['rider_id', 'email', 'created_by', 'password' ];
    protected $guarded    =   [];

    protected $fillable   =   ['first_name', 'middle_name', 'last_name', 'email',
     'mobile_number', 'rating', 'joined_on', 'start_of_working_hour', 'address_1', 'address_2',
     'end_of_working_hour', 'created_at', 'created_by', 'rider_photo_url', 'license_img_url', 'birth_year', 'password' ];



}
