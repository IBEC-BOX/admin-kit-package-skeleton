<?php

namespace VendorName\Skeleton\Models;

use AdminKit\Core\Ship\Abstracts\Models\AbstractModel;
use VendorName\Skeleton\Database\Factories\ModelNameFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class ModelName extends AbstractModel
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'title',
    ];

    protected $casts = [
        //
    ];

    protected $translatable = [
        'title',
    ];

    protected static function newFactory(): ModelNameFactory
    {
        return new ModelNameFactory();
    }
}
