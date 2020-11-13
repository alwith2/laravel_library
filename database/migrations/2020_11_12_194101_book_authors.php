<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BookAuthors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('book_authors', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ref_book_id');
            $table->unsignedBigInteger('ref_user_id');
            // $table->unsignedBigInteger('checkin_condition');
            // $table->unsignedBigInteger('checkout_condition');
            // $table->unsignedBigInteger('status_id');
            $table->datetime('checkout_date');
            $table->datetime('return_date');
            $table->datetime('due_date');
            $table->timestamps('');

                    $table->foreign('ref_book_id')
                        ->references('id')
                        ->on('books')
                        ->onDelete('cascade');

                    // $table->foreign('checkin_condition')
                    //     ->references('id')
                    //     ->on('conditions')
                    //     ->onDelete('cascade');

                    //  $table->foreign('status_id')
                    //     ->references('id')
                    //     ->on('book_status')
                    //     ->onDelete('cascade');





        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('book_authors');
    }
}
