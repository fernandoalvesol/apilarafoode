<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdatePlan;
use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{

    private $repository;

    public function __construct(Plan $plan){

        $this->repository = $plan;
    }

    public function index(){

        $plans = $this->repository->all();

        return view('admin.pages.plans.index', compact('plans'));
    }

    public function create(){

        return view('admin.pages.plans.create');
    }

    public function store(StoreUpdatePlan $request){

        $this->repository->create($request->all());

        return redirect()->route('plans.index');

    }
    public function show($url){

        $plan = $this->repository->where('url', $url)->first();

        if(!$plan)
            return redirect()->back();

        return view('admin.pages.plans.show', compact('plan'));        

    }

    public function destroy($url){

        $plan = $this->repository->where('url', $url)->first();

        if(!$plan)
            return redirect()->back();
            
        $plan->delete();
        
        return redirect()
                        ->route('plans.index');

    }

    public function search(Request $request){

        //exibir dados no navegador (teste)
        //dd($request->all());
        $filter = $request->input('filter');
        
        $plans = $this->repository
                        ->where('name', 'LIKE', '%'.$filter.'%')
                        ->orWhere('description', 'LIKE', '%'.$filter.'%')
                        ->paginate();
        
         return view('admin.pages.plans.index', compact('plans', 'filter'));


    }

    public function edit($url){

        $plan = $this->repository->where('url', $url)->first();

        if(!$plan)
            return redirect()->back();

            return view('admin.pages.plans.edit', compact('plan'));
            
    }

    public function update(StoreUpdatePlan $request, $url){

        $plan = $this->repository->where('url', $url)->first();

        if(!$plan)
            return redirect()->back();
        
        $plan->update($request->all());    

            return redirect()->route('plans.index');
    }
}
