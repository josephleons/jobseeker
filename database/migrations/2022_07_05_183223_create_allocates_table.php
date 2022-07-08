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
        Schema::create('allocates', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('index');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('allocateTo');
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
        Schema::dropIfExists('allocates');
    }
};
