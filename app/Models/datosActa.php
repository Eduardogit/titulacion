<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="datosActa",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="fechaDictamen",
 *          description="fechaDictamen",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="especialidad",
 *          description="especialidad",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="medioTitulacion",
 *          description="medioTitulacion",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="proyecto",
 *          description="proyecto",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="presidente",
 *          description="presidente",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="secretario",
 *          description="secretario",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="vocal",
 *          description="vocal",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tipoDictamen",
 *          description="tipoDictamen",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="jefeDivision",
 *          description="jefeDivision",
 *          type="string"
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
class datosActa extends Model
{
    use SoftDeletes;

    public $table = 'datos_actas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'horaDictamen',
        'fechaDictamen',
        'especialidad',
        'medioTitulacion',
        'proyecto',
        'horaInstalacion',
        'presidente',
        'secretario',
        'vocal',
        'tipoDictamen',
        'terminoDictamen',
        'jefeDivision'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fechaDictamen' => 'date',
        'especialidad' => 'string',
        'medioTitulacion' => 'string',
        'proyecto' => 'string',
        'presidente' => 'string',
        'secretario' => 'string',
        'vocal' => 'string',
        'tipoDictamen' => 'string',
        'jefeDivision' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
