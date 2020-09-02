<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
  public function up()
  {
    Schema::create('profiles', function (Blueprint $table) {
      $table->id();
      $table->string('status');
      $table->boolean('admin')->default(false);
      $table->boolean('verified')->default(false);
      $table->boolean('activated')->default(false);
      $table->boolean('confirmed')->default(false);
      $table->unsignedBigInteger('user_id');
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('profiles');
  }
}
