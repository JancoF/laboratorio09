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
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id_empleado');
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fecha_nacimiento');
            $table->enum('genero', ['masculino', 'femenino', 'otro']);
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('estado_provincia');
            $table->string('cargo');
            $table->decimal('salario', 8, 2);
            $table->date('fecha_contratacion');
            $table->timestamps();
        });
    }

    public function down(): void  /**Metodo down que contiene un metodo de eliminacion de migraciones*/
    {
        Schema::dropIfExists('empleados');/**clase Schema , metodo dropIfExists, esto significa ue si la tabla existe en
        la base de datos esta se eliminara */
    }
};
