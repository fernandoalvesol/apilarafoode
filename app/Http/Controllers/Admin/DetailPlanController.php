<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\DetailPlan;
use App\Model\Plan;

class DetailPlanController extends Controller
{
    protected $repository, $plan;

    public function __construct(DetailPlan $detailPlan, Plan $plan){

        $this->repository = $detailPlan;
        $this->plan = $plan;

    }
    public function index($urlPlan){

        dd('aa');

        /**

        if(!$plan = $this->plan->where('url', $urlPlan)->first()){
            return redirec()->back();
        }

        $details = $plan->details();

        return view('admin.pages.plans.details.index', compact('plan', 'details'));

*/
    }
}
