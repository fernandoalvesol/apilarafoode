<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\DetailPlan;

class Plan extends Model
{
    protected $fillable = [

        'name', 'url', 'price', 'description'

    ];

    public function details(){

        //um para muitos
        return $this->hasMany(DetailPlan::class);

    }
    
}
