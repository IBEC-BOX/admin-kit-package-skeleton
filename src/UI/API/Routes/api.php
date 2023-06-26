<?php

use Illuminate\Support\Facades\Route;
use VendorName\Skeleton\UI\API\Controllers\ModelNameController;

Route::get('/:package_slug_without_prefix', [ModelNameController::class, 'index']);
Route::get('/:package_slug_without_prefix/{id}', [ModelNameController::class, 'show']);
