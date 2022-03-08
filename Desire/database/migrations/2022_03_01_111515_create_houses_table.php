<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->longText('aboutdesc')->nullable();
            $table->string('a1')->nullable();
            $table->string('a2')->nullable();
            $table->string('a3')->nullable();
            $table->string('a4')->nullable();
            $table->string('a5')->nullable();
            $table->string('a6')->nullable();
            $table->string('aphone')->nullable();
            $table->string('applynow')->nullable();
            $table->string('applynowques')->nullable();
            $table->longText('applynowans')->nullable();
            $table->string('abroadfocus')->nullable();
            $table->string('abroadphoto')->nullable();
            $table->longText('abroaddesc')->nullable();
            $table->string('career')->nullable();
            $table->string('careerphoto')->nullable();
            $table->longText('careerdesc')->nullable();
            $table->string('test')->nullable();
            $table->string('testphoto')->nullable();
            $table->longText('testdesc')->nullable();
            $table->string('env')->nullable();
            $table->string('envphoto')->nullable();
            $table->longText('envdesc')->nullable();
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
        Schema::dropIfExists('houses');
    }
}
