<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id(); //primary key
            $table->string('name', 32);
            // $table->unsignedBigInteger('alumno_id');
            /* Esto crea la foreign key que hace referencia al id en la tabla alumnos 
                que sera usadaen otra tabla para realizar la relacion.
            */
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
            $table->foreignId('professor_id')->constrained('professors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
};
