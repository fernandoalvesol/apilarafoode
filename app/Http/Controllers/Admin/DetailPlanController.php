<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DetailPlan;
use App\Models\Plan;

class DetailPlanController extends Controller
{
    protected $repository, $plan;

    public function __construct(DetailPlan $detailPlan, Plan $plan){

        $this->repository = $detailPlan;
        $this->plan = $plan;

    }
    public function index($urlPlan){

        if(!$plan = $this->plan->where('url', $urlPlan)->first()){
            return redirec()->back();
        }

        $details = $plan->details();

        return view('admin.pages.plans.details.index', compact('plan', 'details'));

    }
    public function create($urlPlan){

        if(!$plan = $this->plan->where('url', $urlPlan)->first()){
            return redirec()->back();
        }
        return view('admin.pages.plans.details.create', compact('plan'));
    }

    public function store(Request $request, $urlPlan){

        //testar dados vindo do formulario
        //dd($request->all());

        //$data = $request->all();
        //$data['plan_id'] = $plan->id;
        //$this->repository->create($request->all());

        if(!$plan = $this->plan->where('url', $urlPlan)->first()){
            return redirec()->back();      
        }

            $plan->details()->create($request->all());

            return redirect()->route('details.plan.index', $plan->url);


    }
}
