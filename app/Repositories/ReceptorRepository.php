<?php

namespace App\Repositories;

use App\Models\Receptor;
use App\Repositories\BaseRepository;

/**
 * Class ProductoRepository
 * @package App\Repositories
 * @version March 21, 2023, 3:16 pm UTC
*/

class ReceptorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'organismo',
        'reparticion',
        'dependencia',
        'domicilio',
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Receptor::class;
    }
}
