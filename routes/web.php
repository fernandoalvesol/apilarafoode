<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PlanController;

Route::prefix('admin')->group(function(){


    /**Rotas Details Plan */
    Route::get('plans/{url}/details', [DetailPlanController::class, 'index'])->name('details.plan.index');



    /** rotas planos */

    Route::get('plans/{url}/edit', [PlanController::class, 'edit'])->name('plans.edit');
    Route::put('plans/{url}', [PlanController::class, 'update'])->name('plans.update');
    Route::get('plans/show/{url}', [PlanController::class, 'show'])->name('plans.show');
    Route::get('plans/create', [PlanController::class, 'create'])->name('plans.create');
    Route::post('plans/store', [PlanController::class, 'store'])->name('plans.store');
    Route::any('plans/search', [PlanController::class, 'search'])->name('plans.search');
    Route::get('plan', [PlanController::class, 'index'])->name('plans.index');
    Route::get('plans/{url}', [PlanController::class, 'destroy'])->name('plans.destroy');
    //Route::resource('plans', PlanController::class);    

});




//Route::get('admin/plans/{url}', [PlanController::class, 'show'])->name('plans.show');
//Route::post('admin/plans', [PlanController::class, 'store'])->name('plans.store');
//Route::get('/admin', [PlanController::class, 'create'])->name('plans.create');

Route::get('/', function () {
    return view('welcome');
});
