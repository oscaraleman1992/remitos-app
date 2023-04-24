<?php

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
 */
class Receptor extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'receptores';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'organismo',
        'reparticion',
        'dependencia',
        'domicilio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'organismo' => 'string',
        'reparticion' => 'string',
        'dependencia' => 'string',
        'domicilio' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'organismo' => 'string',
        'reparticion' => 'string',
        'dependencia' => 'string',
        'domicilio' => 'string'
    ];

    
}
