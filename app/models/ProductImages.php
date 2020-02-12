<?php


namespace App\Models;


use Core\H;
use Core\Model;

class ProductImages extends Model
{
    public $id;
    public $url;
    public $product_id;
    public $deleted = 0;

    protected static $_table = 'product_images';

    public function validateImages($images)
    {
        $files = static::restructureFiles($images);
        $errors = [

        ];
        $maxSize = 5000000;
        $allowedTypes = [
            IMAGETYPE_GIF,
            IMAGETYPE_JPEG,
            IMAGETYPE_PNG
        ];

        foreach ($files as $file) {
            $name = $file['name'];

            // check size
            if ($file['size'] > $maxSize) {
                $errors[$name] = $name . ' is over the max allowed size 5MB';
            }

            // checking file type
            if (!in_array(exif_imagetype($file['tmp_name']), $allowedTypes)) {

                $errors[$name] = $name . ' is not allowed file type. Please use a jpeg, gif or png';
            }

        }
        H::dnd($errors);
    }

    protected static function restructureFiles($files)
    {
        $structured = [];

        foreach ($_FILES['productImages']['tmp_name'] as $key => $val) {
            $structured[] = [
                'tmp_name' => $files['tmp_name'][$key],
                'name' => $files['name'][$key],
                'size' => $files['size'][$key],
                'error' => $files['error'][$key],
                'type' => $files['type'][$key],
            ];
        }

        return $structured;
    }

}