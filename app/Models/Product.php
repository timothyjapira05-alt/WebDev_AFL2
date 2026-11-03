<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Table name (optional, Laravel defaults to 'products').
     */
    protected $table = 'products';

    /**
     * Mass assignable attributes.
     */
    protected $fillable = [
        'name',
        'description',
        'ingredients',
        'price',
        'image',
    ];

    /**
     * Accessor to get the image as a base64 data‑uri for Blade.
     */
    public function getImageBase64Attribute(): ?string
    {
        return $this->image
            ? 'data:image/jpeg;base64,' . base64_encode($this->image)
            : null;
    }
}