<?php

namespace App\Repositories;

use App\Models\Marcas;
use InfyOm\Generator\Common\BaseRepository;

class MarcasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Marcas::class;
    }
}
