<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class MembershipPlan extends Model
{
     use HasFactory;

    protected $table = 'membership_plans'; 

    protected $fillable = [
        'plan_name',
        'duration',
        'price',
        'discount',
        'status',
        'description',
    ];
}
