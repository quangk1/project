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
        Schema::create('orderr', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('customer_id');
            $table->date('ordered_date');
            $table->dateTime('delivered_time');
            $table->integer('status')->default(0);
            $table->text('description')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderr');
    }
};
