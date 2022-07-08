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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('index');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('email');
            $table->string('mobile');
            $table->string('physical');
            $table->string('gender');
            $table->string('nida');
            $table->string('region');
            $table->string('district');
            $table->string('ward');
            $table->string('photo');
            $table->string('birth');
            $table->string('cv');
            $table->string('letter');
            $table->string('other');
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
        Schema::dropIfExists('employees');
    }
};
