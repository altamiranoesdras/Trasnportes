<?php

namespace App\Repositories;

use App\Models\Vehiculos;
use InfyOm\Generator\Common\BaseRepository;

class VehiculosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'marca_id',
        'modelo_id',
        'placa',
        'kilometraje'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Vehiculos::class;
    }
}
