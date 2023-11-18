<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Plan;

class DetailPlan extends Model
{
    protected $table = 'details_plan';


    public function plan(){

        $this->belongsTo(Plan::class);
    }
}
