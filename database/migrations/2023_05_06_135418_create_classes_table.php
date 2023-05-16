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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('NameClass');
            $table->foreignId('module1')
                ->constrained('modules', 'id')
                ->onDelete('cascade')
                ->onUpdate('cascade')
                ->nullable();
            $table->foreignId('module2')
                ->constrained('modules', 'id')
                ->onDelete('cascade')
                ->onUpdate('cascade')
                ->nullable();
            $table->foreignId('module3')
                ->constrained('modules', 'id')
                ->onDelete('cascade')
                ->onUpdate('cascade')
                ->nullable();
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
