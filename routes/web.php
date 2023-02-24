<?php

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectStatsController;
use App\Http\Controllers\SubpageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/landing', [SubpageController::class, 'show']);
Route::get('/project-stats', [ProjectStatsController::class, 'index'])->name('landing.show');
Route::post('/subpage/{campaign_id}/click', [SubpageController::class, 'click'])->name('subpage.click');


Route::get('/campaigns', [CampaignController::class, 'index'])->name('campaigns.index');
Route::get('/campaigns/create', [CampaignController::class, 'create'])->name('campaigns.create');
Route::post('/campaigns', [CampaignController::class, 'store'])->name('campaigns.store');
Route::get('/campaigns/{id}/edit', [CampaignController::class, 'edit'])->name('campaigns.edit');
Route::put('/campaigns/{id}', [CampaignController::class, 'update'])->name('campaigns.update');
Route::delete('/campaigns/{id}', [CampaignController::class, 'destroy'])->name('campaigns.destroy');


Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('projects.update');
Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');
