<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('tasks', function (Blueprint $table) {
        $table->id(); // auto increment ID
        $table->string('title'); // task title
        $table->text('description')->nullable(); // task description, optional
        $table->boolean('is_completed')->default(false); // status: completed or not
        $table->timestamps(); // created_at and updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
