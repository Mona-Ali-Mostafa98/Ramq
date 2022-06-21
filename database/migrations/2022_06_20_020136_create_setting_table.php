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
        Schema::create('setting', function (Blueprint $table) {
            $table->id();
            $table->text('logo');
            $table->string('title');
            $table->text('description');
            $table->text('video');

            // $table->string('address')->nullable();
            $table->string('country')->default('KUS');
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('street')->nullable();
            $table->string('Building')->nullable();

            $table->string('email');
            $table->string('commercial_registration_no');
            $table->string('tax_number');
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
        Schema::dropIfExists('setting');
    }
};
