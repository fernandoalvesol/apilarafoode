<?php

namespace App\Observers;

use Illuminate\Support\Str;
use App\Models\Plan;

class PlanObserver
{
    /**
     * Handle the Plan "created" event.
     */
    public function creating(Plan $plan): void
    {
        $plan->url = Str::kebab($plan->name);//cadastrar campo url
    }

    /**
     * Handle the Plan "updated" event.
     */
    public function updating(Plan $plan): void
    {
        $plan->url = Str::kebab($plan->name);//cadastrar campo url
    }

}
