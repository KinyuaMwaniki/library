<?php

namespace Modules\Inventory\Entities;

use Illuminate\Database\Eloquent\Model;

class StkItem extends Model
{

    const MODULE_ID = 1;

    protected $fillable = [
        'StockLink',
        'Code',
        'Description',
        'ItemGroup',
        'TaxSales',
        'TaxSalesReturn',
        'TaxPurchase',
        'TaxPurchaseReturn',
        'Bar_Code',
        'Re_Ord_Lvl',
        'Re_Ord_Qty',
        'Min_Lvl',
        'Max_Lvl',
        'AvgCost',
        'LatestCost',
        'LowestCost',
        'HighestCost',
        'StandardCost',
        'QtyOnHand',
        'ServiceItem',
        'ItemActive',
        'WhseItem',
        'SerialItem',
        'AllowDupeSerial',
        'AllowStrictSerial',
        'BOMItem',
        'bCommissionItem',
        'bLotItem',
        'Make',
        'Model',
        'Type',
        'Color',
        'iItemCostingMethod',
        'fItemLastGRVCost',
        'fNetMass',
        'iUOMStockingUnitID',
        'iUOMPurchaseUnitID',
        'iUOMDSaleUnitID',
        'bAllowNegStock',
        'StkItem_fLeadDays',
        'fBuyLength',
        'fBuyWidth',
        'fBuyHeight',
        'fBuyArea',
        'fBuyVolume',
        'cBuyWeight',
        'cBuyUnit',
        'fSellLength',
        'fSellWidth',
        'fSellHeight',
        'fSellArea',
        'fSellVolume',
        'cSellWeight',
        'cSellUnit',
        'bUOMItem',
        'bDimensionItem',
    ];
    protected $primaryKey = 'StockLink';
    protected $table = 'stkItem';

    public function stockGroup()
    {
        return $this->belongsTo(StkGroup::class, 'ItemGroup', 'group_id');
    }
}
