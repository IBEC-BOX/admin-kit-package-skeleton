<?php

use VendorName\Skeleton\UI\API\Controllers\ModelNameController;
use Illuminate\Support\Facades\Route;

Route::get('/:package_slug_without_prefix', [ModelNameController::class, 'index']);
Route::get('/:package_slug_without_prefix/{id}', [ModelNameController::class, 'show']);
