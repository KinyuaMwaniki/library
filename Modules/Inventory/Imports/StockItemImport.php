<?php

namespace Modules\Inventory\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Modules\Inventory\Entities\StkItem;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
HeadingRowFormatter::default('none');

class StockItemImport implements ToModel, WithHeadingRow
{

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        info("Hello");

        return new StkItem([
            'Code' => $row['Code'],
            'Description' => $row['Description'],
            'ItemGroup' => $row['ItemGroup'],
            'TaxSales' => $row['TaxSales'],
            'TaxSalesReturn' => $row['TaxSalesReturn'],
            'TaxPurchase' => $row['TaxPurchase'],
            'TaxPurchaseReturn' => $row['TaxPurchaseReturn'],
            'Bar_Code' => $row['Bar_Code'],
            'Re_Ord_Lvl' => $row['Re_Ord_Lvl'],
            'Re_Ord_Qty' => $row['Re_Ord_Qty'],
            'Min_Lvl' => $row['Min_Lvl'],
            'Max_Lvl' => $row['Max_Lvl'],
            'AvgCost' => $row['AvgCost'],
            'LatestCost' => $row['LatestCost'],
            'LowestCost' => $row['LowestCost'],
            'HighestCost' => $row['HighestCost'],
            'StandardCost' => $row['StandardCost'],
            'QtyOnHand' => $row['QtyOnHand'],
            'ServiceItem' => $row['ServiceItem'],
            'ItemActive' => $row['ItemActive'],
            'WhseItem' => $row['WhseItem'],
            'SerialItem' => $row['SerialItem'],
            'AllowDupeSerial' => $row['AllowDupeSerial'],
            'AllowStrictSerial' => $row['AllowStrictSerial'],
            'BOMItem' => $row['BOMItem'],
            'bCommissionItem' => $row['bCommissionItem'],
            'bLotItem' => $row['bLotItem'],
            'Make' => $row['Make'],
            'Model' => $row['Model'],
            'Type' => $row['Type'],
            'Color' => $row['Color'],
            'iItemCostingMethod' => $row['iItemCostingMethod'],
            'fItemLastGRVCost' => $row['fItemLastGRVCost'],
            'fNetMass' => $row['fNetMass'],
            'iUOMStockingUnitID' => $row['iUOMStockingUnitID'],
            'iUOMPurchaseUnitID' => $row['iUOMPurchaseUnitID'],
            'iUOMDSaleUnitID' => $row['iUOMDSaleUnitID'],
            'bAllowNegStock' => $row['bAllowNegStock'],
            'StkItem_fLeadDays' => $row['StkItem_fLeadDays'],
            'fBuyLength' => $row['fBuyLength'],
            'fBuyWidth' => $row['fBuyWidth'],
            'fBuyHeight' => $row['fBuyHeight'],
            'fBuyArea' => $row['fBuyArea'],
            'fBuyVolume' => $row['fBuyVolume'],
            'cBuyWeight' => $row['cBuyWeight'],
            'cBuyUnit' => $row['cBuyUnit'],
            'fSellLength' => $row['fSellLength'],
            'fSellWidth' => $row['fSellWidth'],
            'fSellHeight' => $row['fSellHeight'],
            'fSellArea' => $row['fSellArea'],
            'fSellVolume' => $row['fSellVolume'],
            'cSellWeight' => $row['cSellWeight'],
            'cSellUnit' => $row['cSellUnit'],
            'bUOMItem' => $row['bUOMItem'],
            'bDimensionItem' => $row['bDimensionItem'],
        ]);
    }
}
