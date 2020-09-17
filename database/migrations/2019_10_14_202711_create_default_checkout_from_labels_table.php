<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDefaultCheckoutFromLabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('default_checkout_from_labels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('product_id')->unsigned();
            $table->string('sagsnummer')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('quantity')->nullable();
            $table->string('machine_quantity')->nullable();
            $table->string('number_of_employees')->nullable();
            $table->string('no_of_cups')->nullable();
            $table->string('buy')->nullable();
            $table->string('rent')->nullable();
            $table->string('select_office')->nullable();
            $table->string('select_institution')->nullable();
            $table->string('select_warehouse')->nullable();
            $table->string('select_clinic')->nullable();
            $table->string('select_construction')->nullable();
            $table->string('select_shop')->nullable();
            $table->string('question_1')->nullable();
            $table->string('question_2')->nullable();
            $table->string('question_3')->nullable();
            $table->string('question_4')->nullable();
            $table->string('question_5')->nullable();
            $table->string('question_6')->nullable();
            $table->string('question_7')->nullable();
            $table->string('question_8')->nullable();
            $table->string('question_9')->nullable();
            $table->string('question_10')->nullable();
            $table->string('budget_per_hour')->nullable();
            $table->string('budget_per_day')->nullable();
            $table->string('budget_per_week')->nullable();
            $table->string('budget_per_month')->nullable();
            $table->string('budget')->nullable();
            $table->string('start_date_from_calender')->nullable();
            $table->string('end_date_from_calender')->nullable();
            $table->string('meeting_time_stamp')->nullable();
            $table->string('end_time_stamp')->nullable();
            $table->string('description')->nullable();

            $table->foreign('product_id')
                ->references('id')->on('products')
                ->onDelete('cascade');


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
        Schema::dropIfExists('default_checkout_from_labels');
    }
}
