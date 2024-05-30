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
    Schema::create('maintenances', function (Blueprint $table) {
        $table->id();
        $table->foreignId('device_id')->constrained()->cascadeOnDelete();
        $table->string('description');
        $table->date('scheduled_date');
        $table->enum('status', ['scheduled', 'in_progress', 'completed'])->default('scheduled');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenances');
    }
};
