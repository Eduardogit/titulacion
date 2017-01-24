<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class FormBachillerato extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_bachilleratos', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('horaDictamen');
            $table->date('fechaDictamen');
            $table->string('especialidad');
            $table->string('medioTitulacion');
            $table->string('proyecto');
            $table->datetime('horaInstalacion');
            $table->string('presidente');
            $table->string('secretario');
            $table->string('vocal');
            $table->string('tipoDictamen');
            $table->datetime('terminoDictamen');
            $table->string('jefeDivision');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('form_bachilleratos');
    }
}
