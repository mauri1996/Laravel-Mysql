<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();  /// Integer Unsigned Icrement
            $table->string('name',100);  //Varchar 255 caracteres
            //$table->text('name');/// mas q 255
            $table->string('email')->unique(); // hace q sea unico el correo a nivel de base de datos
            $table->timestamp('email_verified_at')->nullable(); // hace q este campo sea vacio
            $table->string('password');
            $table->string('avatar');
            $table->rememberToken(); // varchar 100 caraceres para maejar sesiones
            $table->timestamps(); // 2 columnas timestampS created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
