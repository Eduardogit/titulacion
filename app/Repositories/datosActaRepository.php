<?php

namespace App\Repositories;

use App\Models\datosActa;
use InfyOm\Generator\Common\BaseRepository;

class datosActaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return datosActa::class;
    }
}
