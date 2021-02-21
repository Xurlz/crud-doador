<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doador extends Model
{
    use HasFactory;

    public $timestamps=false; // Remoção do CREATED_AT e UPDATED_AT

    protected $table='doadores'; // necessario devido a funcionalidade do eloquent
    protected $id = 'id';
}
