<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Plan;

class DetailPlan extends Model
{
    protected $table = 'details_plan';

    protected $fillable = ['name'];


    public function plan(){

        //Um plano pode ter varios detalhes.

        $this->belongsTo(Plan::class);
    }
}
