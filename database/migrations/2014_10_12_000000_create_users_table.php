<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('provider');
            $table->string('provider_id');
            $table->string('password');
            $table->string('billing_name')->nullable();;
            $table->string('billing_address')->nullable();;
            $table->string('billing_town')->nullable();;
            $table->string('billing_state')->nullable();;
            $table->string('billing_zipcode')->nullable();;
            $table->string('billing_country')->nullable();;
            $table->string('shipping_name')->nullable();;
            $table->string('shipping_address')->nullable();;
            $table->string('shipping_town')->nullable();;
            $table->string('shipping_state')->nullable();;
            $table->string('shipping_zipcode')->nullable();;
            $table->string('shipping_country')->nullable();;
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
