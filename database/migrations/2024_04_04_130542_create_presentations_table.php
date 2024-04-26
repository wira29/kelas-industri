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
        Schema::create('presentations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->datetime('date');
            $table->foreignUuid('project_id')->constrained('projects')->cascadeOnDelete();
            $table->enum('status', ['pending', 'approved', 'not_approved'])->default('pending');
            $table->enum('presentation_status', ['design', 'beginning', 'progress', 'finalization'])->default('design');
            $table->text('message')->nullable();
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
        Schema::dropIfExists('presentations');
    }
};
