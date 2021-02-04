<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected   $table      =   "customers";
    protected   $primaryKey =   "cust_id";
    protected   $fillable   =   [ 'customer_name', 'cust_country_id', 'cust_state_id', 'cust_city_id', 'address', 'phone_number', 'company_size', 'contact_person', 'status', 'zip_code'];

}
