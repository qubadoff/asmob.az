<?php

use App\Enum\ProjectStatusEnum;
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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('project_categories')->onDelete('cascade');
            $table->text('name');
            $table->text('description')->nullable();
            $table->text('images')->nullable();
            $table->text('videos')->nullable();
            $table->text('delivery_time')->nullable();
            $table->text('materials')->nullable();
            $table->text('slug');
            $table->integer('status')->default(ProjectStatusEnum::ACTIVE->value);
            $table->integer('sort_order')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
