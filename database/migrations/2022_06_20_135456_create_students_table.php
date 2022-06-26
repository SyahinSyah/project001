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
        Schema::create('students', function (Blueprint $table)  {
            $table->id();
            $table->string('student_name');
            $table->bigInteger('student_age');
            $table->bigInteger('student_semester');
            $table->string('student_card');
            $table->string('student_status');
            $table->string('student_email')->unique;
            $table->string('email_university')->unique;
            $table->string('student_imageUrl')->nullable();
            $table->datetime('start_date');
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
        Schema::dropIfExists('students');
    }
};
