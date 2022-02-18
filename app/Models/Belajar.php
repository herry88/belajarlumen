<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Belajar extends Model{
    protected $table = "belajar";

    protected $fillable = ['nama', 'alamat'];

    public $timestamps = false;
}
