<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'email',
        'phone',
        'title',
        'title',
        'purpose',
        'description',
        'file',
    ];

    static function add($request)
    {
        try {
            Contact::create($request);
        } catch (Exception $error) {
            throw $error;
        }
    }
}
