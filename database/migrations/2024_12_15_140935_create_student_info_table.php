<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_info', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('student_number')->nullable();          // คอลัมน์ประเภท Integer ที่สามารถเป็น NULL ได้
            $table->float('grade_average')->nullable();             // คอลัมน์ประเภท Float ที่สามารถเป็น NULL ได้
            $table->string('student_name', 255)->nullable();        // คอลัมน์ประเภท String ที่สามารถเป็น NULL ได้
            $table->date('enrollment_date')->nullable();            // คอลัมน์ประเภท Date ที่สามารถเป็น NULL ได้
            $table->text('remarks')->nullable();                    // คอลัมน์ประเภท Text ที่สามารถเป็น NULL ได้
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_info');
    }
};
