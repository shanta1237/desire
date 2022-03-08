<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->text('about')->nullable();
            $table->longText('desc')->nullable();
            $table->text('mission')->nullable();
            $table->longText('descmission')->nullable();
            $table->text('choose')->nullable();
            $table->longText('descchoose')->nullable();
            $table->text('message')->nullable();
            $table->string('photo')->nullable();
            $table->string('photo1')->nullable();
            $table->longText('descmessage')->nullable();
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
        Schema::dropIfExists('about_us');
    }
}
