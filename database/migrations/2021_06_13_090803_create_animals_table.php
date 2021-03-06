<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->string('id')->unique();
            // $table->primary('id');
            $table->unsignedBigInteger('type_id')->nullable();
            $table->string('name');
            $table->date('birthday')->nullable();
            $table->string('area')->nullable();
            $table->boolean('fix')->default(false);
            $table->text('description')->nullable();
            $table->text('personality')->nullable();
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('animals');
    }
}
