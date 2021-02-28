<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tenant_detail extends Model
{
    use HasFactory;

    protected $fillable = ['tenant_name','tenant_password','tenant_contact_no','tenant_address','tenant_area','tenant_city','tenant_state','tenant_occupation'];
    protected $table = 'tenant_details';
    protected $primaryKey = 'tenant_id';
}