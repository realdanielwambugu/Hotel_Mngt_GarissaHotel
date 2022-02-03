<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

use Xcholars\Storage\FileSystem;

class Facility extends Model
{
    protected $fillable = [
        'image',
        'name',
        'open',
        'close',
        'capacity',
        'price',
        'description',
    ];

    public function upload_photo()
    {
        $storage = new FileSystem(upload_path('facility'));

        $file = new \Upload\File('image', $storage);

        $fileName = uniqid();

        $file->setName($fileName);

        $file->upload();

        return $file->getNameWithExtension();
    }
}
