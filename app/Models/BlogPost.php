<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $table = 'blog_posts';

    protected $fillable = [
        'title',
        'category',
        'description',
        'content',
        'image',
        'image_mime_type',
    ];

    public function getImageBase64Attribute()
    {
        if (!$this->image) {
            return null;
        }

        return 'data:' . $this->image_mime_type
            . ';base64,' . base64_encode($this->image);
    }
}
