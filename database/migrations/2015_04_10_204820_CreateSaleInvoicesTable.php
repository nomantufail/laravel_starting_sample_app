<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleInvoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sale_invoices', function(Blueprint $table)
		{
            $table->increments('id');
            $table->date('invoice_date');
            $table->integer('customer_id');
            $table->string('transaction_type');
            $table->double('paid');
            $table->text('extra_info');
            $table->softDeletes();
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
		Schema::drop('sale_invoices');
	}

}
