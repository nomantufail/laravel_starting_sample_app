<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleInvoiceItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sale_invoice_items', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('invoice_id');
            $table->integer('product_id');
            $table->double('quantity');
            $table->double('sale_price_per_item');
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
		Schema::drop('sale_invoice_items');
	}

}
