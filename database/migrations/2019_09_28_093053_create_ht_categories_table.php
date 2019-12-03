<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHtCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ht_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('my_name');
            $table->string('en_name');
            $table->text('my_description');
            $table->text('en_description');
            $table->text('image');
            $table->timestamps();
        });
        Schema::create('ht_groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('en_title');
            $table->string('my_title');
            $table->text('image');
            $table->text('en_image');
            $table->timestamps();
        });
        Schema::create('regions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('my_name');
            $table->string('en_name');
            $table->timestamps();
        });
        //for အမ်ိဳးသားလႊတ္ေတာ္ ျပည္သူ႔လၽြတ္ေတာ္
        Schema::create('ht_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('my_name');
            $table->string('en_name');
            $table->timestamps();
        });

        Schema::create('ht_pm', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('user_id')->unsigned()->index();
            $table->bigInteger('region_id')->index()->unsigned();
            $table->bigInteger('ht_category_id')->index()->unsigned();

            $table->string('my_name')->nullable();
            $table->string('en_name')->nullable();

            $table->string('my_expire')->nullable();
            $table->string('en_expire')->nullable();

            $table->text('my_party')->nullable();
            $table->text('en_party')->nullable();

            $table->string('my_ticket_division')->nullable();
            $table->string('en_ticket_division')->nullable();

            $table->string('my_start_work')->nullable();
            $table->string('en_start_work')->nullable();

            $table->string('en_end_work')->nullable();
            $table->string('my_end_work')->nullable();

            $table->text('my_location')->nullable();
            $table->string('en_location')->nullable();

            $table->text('my_other_location')->nullable();
            $table->string('en_other_location')->nullable();


            $table->text('my_party_position')->nullable();
            $table->text('en_party_position')->nullable();

            $table->string('my_phone')->nullable();
            $table->string('en_phone')->nullable();

            $table->text('my_about')->nullable();
            $table->text('en_about')->nullable();

            $table->string('email')->nullable();
            $table->text('facebook')->nullable();
            $table->text('image')->nullable();

            $table->enum('en_gender',['male','female']);
            $table->enum('my_gender',['ကျား','မ']);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
            $table->foreign('ht_category_id')->references('id')->on('ht_categories')->onDelete('cascade');
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
        Schema::dropIfExists('ht_categories');
    }
}
