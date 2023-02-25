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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('customer_name', 60);
            $table->string('customer_email', 100);
            $table->enum('customer_gender',["M","F","O"]);
            $table->text('customer_address');
            $table->date('customer_dob')->nullable();
            $table->string('customer_password');
            $table->boolean('martial_status')->default(1);
            $table->integer('points')->default(0);
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
        Schema::dropIfExists('customers');
    }
}; 
