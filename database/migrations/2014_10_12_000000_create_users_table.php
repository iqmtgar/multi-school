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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string("phone")->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string("role");
            $table->integer("school_id");
            $table->string("photo")->nullable();
            $table->string("photo_url")->nullable();
            $table->integer("teacher_application_permission")->nullable();
            $table->integer("class_id")->nullable();
            $table->integer("section_id")->nullable();
            $table->integer("salary")->nullable();
            $table->integer("credit_without_salary")->default(1);
            $table->integer("credit_time")->default(3);
            $table->integer("manager_id")->nullable();
            $table->integer("wallet")->default(0);
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
        Schema::dropIfExists('users');
    }
};
