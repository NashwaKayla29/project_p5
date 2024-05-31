<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama'];
    public $timestamps = true;

    public function struktural ()
    {
        return $this->hasMany(Struktural::class);
    }
}
