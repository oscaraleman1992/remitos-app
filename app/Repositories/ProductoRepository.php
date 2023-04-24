<?php

namespace App\Repositories;

use App\Models\Producto;
use App\Repositories\BaseRepository;

/** 
 * Class ProductoRepository
 * @package App\Repositories
 * @version March 21, 2023, 3:16 pm UTC
*/

class ProductoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'precio'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     **/
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Producto::class;
    }
}
