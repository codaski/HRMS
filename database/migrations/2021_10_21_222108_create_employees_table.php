<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
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
            $table->string('name');
            $table->string('code')->unique();
            $table->string('education');
            $table->boolean('gender');
            $table->date('graduation_date')->nullable();
            $table->date('birth_date');
            $table->date('start_date');
            $table->date('resign_date')->nullable();
            $table->string('id_number')->unique();
            $table->string('personal_email')->unique();
            $table->string('work_email')->unique();
            $table->string('personal_phone')->unique();
            $table->string('landline')->nullable();
            $table->string('phone_ext')->nullable();
            $table->string('work_phone')->unique();
            $table->string('address');
            $table->string('city');
            $table->string('country')->default('Egypt');
            $table->foreignId('department_id')->references('id')->on('departments');;
            $table->foreignId('job_id')->references('id')->on('jobs');;
            $table->string('photo')->nullable();
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
}
