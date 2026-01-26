<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Music extends Model
{
    use HasFactory;
    // ...existing code...
    protected $table = 'music';
    protected $fillable = ['title', 'artist', 'album'];
}
