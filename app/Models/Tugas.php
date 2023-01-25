<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    /**
     * @var string
     */
    protected $table = 'tugas';

    /**
     * @var array
     */
    protected $fillable = [
        'judul', 'deskripsi',
    ];
}
