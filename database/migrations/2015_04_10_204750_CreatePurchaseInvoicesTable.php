<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseInvoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchase_invoices', function(Blueprint $table)
		{
			$table->increments('id');
            $table->date('invoice_date');
            $table->integer('supplier_id');
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
		Schema::drop('purchase_invoices');
	}

}
