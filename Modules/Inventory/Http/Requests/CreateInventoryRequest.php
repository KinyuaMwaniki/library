<?php

namespace Modules\Inventory\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateInventoryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return[
                'Code' => 'bail|required',
                'Description' => 'bail|required',
                'ItemGroup' => 'bail|required',
                'TaxSales' => 'bail|required',
                'TaxSalesReturn' => 'bail|required',
                'TaxPurchase' => 'bail|required',
                'TaxPurchaseReturn' => 'bail|required',
                'Bar_Code' => 'bail|required',
                'Re_Ord_Lvl' => 'bail|required',
                'Re_Ord_Qty' => 'bail|required',
                'Min_Lvl' => 'bail|required',
                'Max_Lvl' => 'bail|required',
                'AvgCost' => 'bail|required',
                'LatestCost' => 'bail|required',
                'LowestCost' => 'bail|required',
                'HighestCost' => 'bail|required',
                'StandardCost' => 'bail|required',
                'QtyOnHand' => 'bail|required',
                'Make' => 'bail|required',
                'Model' => 'bail|required',
                'Type' => 'bail|required',
                'Color' => 'bail|required',
                'iItemCostingMethod' => 'bail|required',
                'fItemLastGRVCost' => 'bail|required',
                'fNetMass' => 'bail|required',
                'iUOMStockingUnitID' => 'bail|required',
                'iUOMPurchaseUnitID' => 'bail|required',
                'StkItem_fLeadDays' => 'bail|required',
                'iUOMDSaleUnitID' => 'bail|required',
                'fBuyLength' => 'bail|required',
                'fBuyWidth' => 'bail|required',
                'fBuyHeight' => 'bail|required',
                'fBuyArea' => 'bail|required',
                'fBuyVolume' => 'bail|required',
                'cBuyWeight' => 'bail|required',
                'cBuyUnit' => 'bail|required',
                'fSellLength' => 'bail|required',
                'fSellWidth' => 'bail|required',
                'fSellHeight' => 'bail|required',
                'fSellArea' => 'bail|required',
                'fSellVolume' => 'bail|required',
                'cSellWeight' => 'bail|required',
                'cSellUnit' => 'bail|required',
                // 'bAllowNegStock' => 'bail|required',
                // 'ItemActive' => 'bail|required',
                // 'WhseItem' => 'bail|required',
                // 'SerialItem' => 'bail|required',
                // 'AllowDupeSerial' => 'bail|required',
                // 'AllowStrictSerial' => 'bail|required',
                // 'BOMItem' => 'bail|required',
                // 'bCommissionItem' => 'bail|required',
                // 'bLotItem' => 'bail|required',
                // 'bUOMItem' => 'bail|required',
                // 'bDimensionItem' => 'bail|required',
            ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
