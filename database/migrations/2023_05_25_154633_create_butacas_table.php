<?php

use Illuminate\Database\Migrations\Migration;/**Es utiliza para crear migraciones en Laravel */
use Illuminate\Database\Schema\Blueprint;/**Es utilizada para definir la estructura de una tabla de la base de datos. */
use Illuminate\Support\Facades\Schema;/**Es utilizada para interactuar con la base de datos y realizar operaciones. */
    /**
     * Es una plantilla básica para una migración en Larave.
     * Se importan las clases necesarias para realizar una migracion.
     */
return new class extends Migration
{
    /**
     * Ejecuta las migraciones de las tablas.
     */
    public function up(): void
    {
        Schema::create('butacas', function (Blueprint $table) {
            $table->integer('id_butaca');
            $table->integer('numero_butaca');
            $table->integer('id_sala');
            $table->foreign('id_sala');
        });
    }

    /**
     * Este metodo se encarga de la eliminacion de la tabla mencionada en caso exista.
     */
    public function down(): void  /**Metodo down que contiene un metodo de eliminacion de migraciones*/
    {
        Schema::dropIfExists('butacas');/**clase Schema , metodo dropIfExists, esto significa ue si la tabla existe en
        la base de datos esta se eliminara */
    }
};
