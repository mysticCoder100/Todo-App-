<?php

use App\Enums\TaskPriorities;
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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tasks_category_id')->constrained()->onDelete('cascade');
            $table->string('name',30);
            $table->text('description')->nullable();
            $table->dateTime('due_date')->nullable();
            $table->boolean('is_completed')->default(false);
            $table->string("priority",7)->default(TaskPriorities::Medium->value);
            $table->timestamps();
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
