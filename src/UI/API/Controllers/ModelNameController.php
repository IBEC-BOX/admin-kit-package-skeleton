<?php

declare(strict_types=1);

namespace VendorName\Skeleton\UI\API\Controllers;

use VendorName\Skeleton\Models\ModelName;

class ModelNameController extends Controller
{
    public function index()
    {
        return ModelName::all();
    }

    public function show(int $id)
    {
        return ModelName::findOrFail($id);
    }
}
