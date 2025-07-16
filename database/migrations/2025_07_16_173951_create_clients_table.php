<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('db_host');
            $table->string('db_port')->default('3306');
            $table->string('db_name');
            $table->string('db_username');
            $table->string('db_password');
            $table->date('subscription_start_date');
            $table->date('subscription_end_date')->nullable();
            $table->date('renewal_date')->nullable();
            $table->decimal('price_per_month', 10, 2)->default(0);
            $table->decimal('amount_paid', 10, 2)->default(0);
            $table->enum('status', ['active', 'inactive', 'expired'])->default('active');
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
        Schema::dropIfExists('clients');
    }
}
