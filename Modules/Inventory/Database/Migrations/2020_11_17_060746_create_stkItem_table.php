<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStkItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stkItem', function (Blueprint $table) {

            $table->bigIncrements('StockLink');
            $table->string('Code');
            $table->string('Description');
            $table->unsignedBigInteger('ItemGroup');
            $table->unsignedBigInteger('TaxSales');
            $table->unsignedBigInteger('TaxSalesReturn');
            $table->unsignedBigInteger('TaxPurchase');
            $table->unsignedBigInteger('TaxPurchaseReturn');
            $table->string('Bar_Code');
            $table->float('Re_Ord_Lvl');
            $table->float('Re_Ord_Qty');
            $table->float('Min_Lvl');
            $table->float('Max_Lvl');
            $table->float('AvgCost');
            $table->float('LatestCost');
            $table->float('LowestCost');
            $table->float('HighestCost');
            $table->float('StandardCost');
            $table->float('QtyOnHand');
            $table->boolean('ServiceItem')->default(0);
            $table->boolean('ItemActive')->default(0);
            $table->boolean('WhseItem')->default(0);
            $table->boolean('SerialItem')->default(0);
            $table->boolean('AllowDupeSerial')->default(0);
            $table->boolean('AllowStrictSerial')->default(0);
            $table->boolean('BOMItem')->default(0);
            $table->boolean('bCommissionItem')->default(0);
            $table->boolean('bLotItem')->default(0);
            $table->string('Make');
            $table->string('Model');
            $table->string('Type');
            $table->string('Color');
            $table->integer('iItemCostingMethod');
            $table->float('fItemLastGRVCost');
            $table->float('fNetMass');
            $table->integer('iUOMStockingUnitID');
            $table->integer('iUOMPurchaseUnitID');
            $table->integer('iUOMDSaleUnitID');
            $table->boolean('bAllowNegStock')->default(0);
            $table->float('StkItem_fLeadDays');
            $table->float('fBuyLength');
            $table->float('fBuyWidth');
            $table->float('fBuyHeight');
            $table->float('fBuyArea');
            $table->float('fBuyVolume');
            $table->float('cBuyWeight');
            $table->string('cBuyUnit');
            $table->float('fSellLength');
            $table->float('fSellWidth');
            $table->float('fSellHeight');
            $table->float('fSellArea');
            $table->float('fSellVolume');
            $table->float('cSellWeight');
            $table->string('cSellUnit');
            $table->boolean('bUOMItem')->default(0);
            $table->boolean('bDimensionItem')->default(0);
            $table->timestamps();

            $table->foreign('ItemGroup')->references('group_id')->on('stkGroup')->onDelete('cascade');;
            $table->foreign('TaxSales')->references('tax_id')->on('taxes')->onDelete('cascade');;
            $table->foreign('TaxSalesReturn')->references('tax_id')->on('taxes')->onDelete('cascade');;
            $table->foreign('TaxPurchase')->references('tax_id')->on('taxes')->onDelete('cascade');;
            $table->foreign('TaxPurchaseReturn')->references('tax_id')->on('taxes')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stkItem');
    }
}
