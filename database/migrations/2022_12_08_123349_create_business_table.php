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
        Schema::create('business', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name',30);
            $table->string('bank_information');
            $table->string('phone',30);
            $table->string('email',100);
            $table->string('website',200)->nullable(true);//nullable là bảng không cần có cx đc
            $table->string('fanpage',200)->nullable(true);
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
        Schema::dropIfExists('business');
    }
};
