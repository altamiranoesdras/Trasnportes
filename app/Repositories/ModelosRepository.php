<?php

namespace App\Repositories;

use App\Models\Modelos;
use InfyOm\Generator\Common\BaseRepository;

class ModelosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'marca_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Modelos::class;
    }
}
