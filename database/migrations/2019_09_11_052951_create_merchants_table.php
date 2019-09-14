<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('fullname');
            $table->text('companyName');
            $table->text('email');
            $table->text('mobileNumber');
            $table->text('businessFilingStatus');
            $table->text('businessType');
            $table->text('businessName');
            $table->text('businessAddress');
            $table->text('pincode');
            $table->text('operatingAddress');
            $table->text('operatingPincode');
            $table->text('appDetail');
            $table->text('panNumber');
            $table->text('cin');
            $table->text('din');
            $table->text('gst');
            $table->text('document');
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
        Schema::dropIfExists('merchants');
    }
}
