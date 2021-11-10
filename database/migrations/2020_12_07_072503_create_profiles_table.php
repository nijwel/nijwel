<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('company_name');
            $table->string('designation');
            $table->string('image');
            $table->text('details');
            $table->string('dob');
            $table->string('phone');
            $table->string('marital');
            $table->string('nationality');
            $table->string('email');
            $table->string('skype');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('linkdin');
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
        Schema::dropIfExists('profiles');
    }
}
