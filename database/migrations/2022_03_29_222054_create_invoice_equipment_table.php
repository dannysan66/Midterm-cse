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
        Schema::create('invoice_equipment', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('equipment_id')constrained('equipment')->onDelete('cascade');;
            $table->foreignId('invoice_id')constrained('invoice')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_equipment');
    }
};