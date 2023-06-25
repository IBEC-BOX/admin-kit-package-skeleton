<?php

use VendorName\Skeleton\UI\API\Controllers\ModelController;
use Illuminate\Support\Facades\Route;

Route::get('/:package_slug_without_prefix', [ModelController::class, 'index']);
Route::get('/:package_slug_without_prefix/{id}', [ModelController::class, 'show']);
