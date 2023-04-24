<?php
/*
namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Producto
 * @package App\Models
 * @version March 21, 2023, 3:16 pm UTC
 *
 * @property string $nombre
 * @property string $descripcion
 * @property string $precio
 
class Producto extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'productos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'marca',
        'modelo',
        'numero',
        'rack',
        'cable',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     
    protected $casts = [
        'marca' => 'string',
        'modelo' => 'string',
        'numero' => 'string',
        'rack' => 'string',
        'cable' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     
    public static $rules = [
        'marca' => 'required',
        'modelo' => 'required',
        'numero' => 'required',
        'rack' => 'required',
        'cable' => 'required',
    ];

    
}
*/