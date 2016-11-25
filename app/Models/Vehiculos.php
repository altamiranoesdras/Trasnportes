<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Vehiculos",
 *      required={"marca_id", "modelo_id", "placa", "kilometraje"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="marca_id",
 *          description="marca_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="modelo_id",
 *          description="modelo_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="placa",
 *          description="placa",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="kilometraje",
 *          description="kilometraje",
 *          type="number",
 *          format="double"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Vehiculos extends Model
{
    use SoftDeletes;

    public $table = 'vehiculos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'marca_id',
        'modelo_id',
        'placa',
        'kilometraje'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'marca_id' => 'integer',
        'modelo_id' => 'integer',
        'placa' => 'string',
        'kilometraje' => 'double'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'marca_id' => 'required',
        'modelo_id' => 'required',
        'placa' => 'required',
        'kilometraje' => 'required'
    ];

    public function marca(){

        return $this->belongsTo('App\Models\Marcas');
    }

    public function modelo(){

        return $this->belongsTo('App\Models\Modelos');
    }

    
}
