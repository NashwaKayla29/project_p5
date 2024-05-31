<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_guru', 'telepon', 'email', 'id_mapel', 'sampul'];
    public $timestamps = true;

    public function mapel()
    {
        return $this->belongsTo(Mapel::class,'id_mapel');
    } 
    public function struktural()
    {
        return $this->hasMany(Struktural::class);
    }

    public function deleteImage(){
        if($this->cover && file_exists(public_path('images/guru' .$this->sampul))){
            return unlink(public_path('images/guru .$this->sampul'));
        }
    }
}
