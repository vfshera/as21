<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->longText("topic");
            $table->string("type_of_paper");
            $table->string("subject_area");
            $table->longText("paper_details");
            $table->string("paper_format");
            $table->string("prefered_english");
            $table->string("number_of_sources");
            $table->string("number_of_pages");
            $table->string("spacing");
            $table->string("academic_level");
            $table->string("urgency");
            $table->string("additional_materials");
            $table->string("stage")->default("0");
            $table->string("user_id");
            $table->string("service_type");
            $table->string("paypal_order_id")->nullable(true);
            $table->bigInteger("cost")->default(0);
            $table->boolean("viewed")->nullable(true)->default(false);

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
        Schema::dropIfExists('orders');
    }
}