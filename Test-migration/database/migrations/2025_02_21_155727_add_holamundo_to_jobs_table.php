<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //usamos el metodo table para modificar los parametros que ya existen en una base de datos
        Schema::table('jobs', function (Blueprint $table) {
            //agregamos la columna que queremos en la tabla de jobs en este caso
                                    //necesitamos que el nuevo campo tenga algo es por eso que para que la base de datos
                                    //no de ningun error le pasamos el valor nullable
                                    //tambien podemos añadir el orden en el que la columna debe estar
            $table->string('hola')->nullable()->after('attempts');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jobs', function (Blueprint $table) {
            //para solo borrar la columna
            $table->dropColumn('hola');
        });
    }
};
