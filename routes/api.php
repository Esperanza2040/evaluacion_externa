<?php
use App\Http\Controllers\Api\TaskApiController;
 
Route::apiResource('tasks', TaskApiController::class);