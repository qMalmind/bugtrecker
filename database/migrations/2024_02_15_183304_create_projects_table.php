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
        Schema::create('projects', function (Blueprint $table) {
            $table->id("id_project");

            $table->string("project_name", 255);
            $table->tinyText("project_description")->nullable();
            $table->string("logo")->nullable();
            $table->unsignedBigInteger('executor_task')->nullable()->comment("id проекта, которые делает задачи для этого проекта");
            $table->index(["executor_task"]);

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
