<?php

namespace App\Repositories;

use App\Models\Sucursal;
use InfyOm\Generator\Common\BaseRepository;

class SucursalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'direccion',
        'kilometros',
        'telefono'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Sucursal::class;
    }
}
