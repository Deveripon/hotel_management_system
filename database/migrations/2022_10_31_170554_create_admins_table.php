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
        Schema::create('admins', function (Blueprint $table) {
               $table->id();
               $table->string('name');
               $table->string('username') ->unique();
               $table->string('password');
               $table->string('email') -> nullable() -> unique();
               $table->string('cell') -> nullable() -> unique();
               $table->text('image') -> nullable();
               $table->string('role') -> nullable();
               $table->string('gender') -> nullable();
               $table->string('age') -> nullable();
               $table->string('location') -> nullable();
               $table->string('blood') -> nullable();
               $table->boolean('status') -> default(true);
               $table->boolean('trash') -> default(false);
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
        Schema::dropIfExists('admins');
    }
};