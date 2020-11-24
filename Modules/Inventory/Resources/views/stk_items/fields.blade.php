<!-- Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Code', 'Code<span class="required-marker">*</span>', '', false) !!}
    {!! Form::text('Code', null, ['class' => 'form-control', 'required' => 'required']) !!}
    @error('Code')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Description', 'Description<span class="required-marker">*</span>', '', false) !!}
    {!! Form::text('Description', null, ['class' => 'form-control']) !!}
    @error('Description')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Stock Group Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ItemGroup', 'Item Group<span class="required-marker">*</span>', '', false) !!}
    {!! Form::select('ItemGroup', $stock_groups, null, ['class' => 'form-control']) !!}
    @error('ItemGroup')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Tax Sales Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TaxSales', 'Sales Tax<span class="required-marker">*</span>', '', false) !!}
    {!! Form::select('TaxSales', $taxes, null, ['class' => 'form-control']) !!}
    @error('TaxSales')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>
<!-- Sales Return Tax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TaxSalesReturn', 'Sales Return Tax<span class="required-marker">*</span>', '', false) !!}
    {!! Form::select('TaxSalesReturn', $taxes, null, ['class' => 'form-control']) !!}
    @error('TaxSalesReturn')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>
<!-- Purchase Tax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TaxPurchase', 'Purchase Tax<span class="required-marker">*</span>', '', false) !!}
    {!! Form::select('TaxPurchase', $taxes, null, ['class' => 'form-control']) !!}
    @error('TaxPurchase')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Purchase Return Tax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TaxPurchaseReturn', 'Purchase Return Tax<span class="required-marker">*</span>', '', false) !!}
    {!! Form::select('TaxPurchaseReturn', $taxes, null, ['class' => 'form-control']) !!}
    @error('TaxPurchaseReturn')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Barcode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Bar_Code', 'Barcode<span class="required-marker">*</span>', '', false) !!}
    {!! Form::text('Bar_Code', null, ['class' => 'form-control']) !!}
    @error('Bar_Code')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Reorder Level Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Re_Ord_Lvl', 'Reorder Level<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('Re_Ord_Lvl', null, ['class' => 'form-control']) !!}
    @error('Re_Ord_Lvl')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Reorder Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Re_Ord_Qty', 'Reorder Quantity<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('Re_Ord_Qty', null, ['class' => 'form-control']) !!}
    @error('Re_Ord_Qty')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Mininum Level Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Min_Lvl', 'Mininum Level<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('Min_Lvl', null, ['class' => 'form-control']) !!}
    @error('Min_Lvl')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Maximum Level Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Max_Lvl', 'Maximum Level<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('Max_Lvl', null, ['class' => 'form-control']) !!}
    @error('Max_Lvl')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Average Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AvgCost', 'Average Cost<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('AvgCost', null, ['class' => 'form-control']) !!}
    @error('AvgCost')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Latest Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('LatestCost', 'Latest Cost<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('LatestCost', null, ['class' => 'form-control']) !!}
    @error('LatestCost')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Lowest Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('LowestCost', 'Lowest Cost<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('LowestCost', null, ['class' => 'form-control']) !!}
    @error('LowestCost')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Hignest Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('HighestCost', 'Hignest Cost<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('HighestCost', null, ['class' => 'form-control']) !!}
    @error('HighestCost')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Standard Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('StandardCost', 'Standard Cost<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('StandardCost', null, ['class' => 'form-control']) !!}
    @error('StandardCost')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Quantity on hand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('QtyOnHand', 'Quantity On Hand<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('QtyOnHand', null, ['class' => 'form-control']) !!}
    @error('QtyOnHand')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Make Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Make', 'Make<span class="required-marker">*</span>', '', false) !!}
    {!! Form::text('Make', null, ['class' => 'form-control']) !!}
    @error('Make')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Model Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Model', 'Model<span class="required-marker">*</span>', '', false) !!}
    {!! Form::text('Model', null, ['class' => 'form-control']) !!}
    @error('Model')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Type', 'Type<span class="required-marker">*</span>', '', false) !!}
    {!! Form::text('Type', null, ['class' => 'form-control']) !!}
    @error('Type')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Color Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Color', 'Color<span class="required-marker">*</span>', '', false) !!}
    {!! Form::text('Color', null, ['class' => 'form-control']) !!}
    @error('Color')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Item Costing Method Field -->
<div class="form-group col-sm-6">
    {!! Form::label('iItemCostingMethod', 'Item Costing Method<span class="required-marker">*</span>','',false) !!}
    {!! Form::select('iItemCostingMethod', ['1' => 'Account One' , '2' => 'Account Two' , '3' => 'Account Three'], null, ['class' => 'form-control select2']) !!}
    @error('iItemCostingMethod')
    <div class="error text-danger">{{ $message }}</div>
@enderror
</div>

<!-- Item Last GRV Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fItemLastGRVCost', 'Item Last GRV Cost<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('fItemLastGRVCost', null, ['class' => 'form-control']) !!}
    @error('fItemLastGRVCost')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Net Mass Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fNetMass', 'Net Mass<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('fNetMass', null, ['class' => 'form-control']) !!}
    @error('fNetMass')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- UOM Stocking Unit ID Field -->
<div class="form-group col-sm-6">
    {!! Form::label('iUOMStockingUnitID', 'UOM Stocking Unit<span class="required-marker">*</span>','',false) !!}
    {!! Form::select('iUOMStockingUnitID', ['1' => 'Account One' , '2' => 'Account Two' , '3' => 'Account Three'], null, ['class' => 'form-control select2']) !!}
    @error('iUOMStockingUnitID')
    <div class="error text-danger">{{ $message }}</div>
@enderror
</div>

<!-- UOM Purchase Unit ID Field -->
<div class="form-group col-sm-6">
    {!! Form::label('iUOMPurchaseUnitID', 'UOM Purchase Unit<span class="required-marker">*</span>','',false) !!}
    {!! Form::select('iUOMPurchaseUnitID', ['1' => 'Account One' , '2' => 'Account Two' , '3' => 'Account Three'], null, ['class' => 'form-control select2']) !!}
    @error('iUOMPurchaseUnitID')
    <div class="error text-danger">{{ $message }}</div>
@enderror
</div>

<!-- UOM Sale Unit ID Field -->
<div class="form-group col-sm-6">
    {!! Form::label('iUOMDSaleUnitID', 'UOM Sale Unit<span class="required-marker">*</span>','',false) !!}
    {!! Form::select('iUOMDSaleUnitID', ['1' => 'Account One' , '2' => 'Account Two' , '3' => 'Account Three'], null, ['class' => 'form-control select2']) !!}
    @error('iUOMDSaleUnitID')
    <div class="error text-danger">{{ $message }}</div>
@enderror
</div>


<!-- Stock Item Lead Days Field -->
<div class="form-group col-sm-6">
    {!! Form::label('StkItem_fLeadDays', 'Stock Item Lead Days<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('StkItem_fLeadDays', null, ['class' => 'form-control']) !!}
    @error('StkItem_fLeadDays')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Buy Length Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fBuyLength', 'Buy Length<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('fBuyLength', null, ['class' => 'form-control']) !!}
    @error('fBuyLength')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Buy Width Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fBuyWidth',  'Buy Width<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('fBuyWidth', null, ['class' => 'form-control']) !!}
    @error('fBuyWidth')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Buy Height Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fBuyHeight', 'Buy Height<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('fBuyHeight', null, ['class' => 'form-control']) !!}
    @error('fBuyHeight')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Buy Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fBuyArea', 'Buy Area<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('fBuyArea', null, ['class' => 'form-control']) !!}
    @error('fBuyArea')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Buy Volume Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fBuyVolume', 'Buy Volume<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('fBuyVolume', null, ['class' => 'form-control']) !!}
    @error('fBuyVolume')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Buy Weight Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cBuyWeight', 'Buy Weight<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('cBuyWeight', null, ['class' => 'form-control']) !!}
    @error('cBuyWeight')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Buy Unit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cBuyUnit', 'Buy Unit<span class="required-marker">*</span>', '', false) !!}
    {!! Form::text('cBuyUnit', null, ['class' => 'form-control']) !!}
    @error('cBuyUnit')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Sell Length Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fSellLength', 'Sell Length<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('fSellLength', null, ['class' => 'form-control']) !!}
    @error('fSellLength')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Sell Width Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fSellWidth', 'Sell Width<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('fSellWidth', null, ['class' => 'form-control']) !!}
    @error('fSellWidth')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Sell Height Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fSellHeight', 'Sell Height<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('fSellHeight', null, ['class' => 'form-control']) !!}
    @error('fSellHeight')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Sell Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fSellArea', 'Sell Area<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('fSellArea', null, ['class' => 'form-control']) !!}
    @error('fSellArea')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Sell Volume Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fSellVolume', 'Sell Volume<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('fSellVolume', null, ['class' => 'form-control']) !!}
    @error('fSellVolume')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Sell Weight Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cSellWeight', 'Sell Weight<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('cSellWeight', null, ['class' => 'form-control']) !!}
    @error('cSellWeight')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Sell Unit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cSellUnit', 'Sell Unit<span class="required-marker">*</span>', '', false) !!}
    {!! Form::number('cSellUnit', null, ['class' => 'form-control']) !!}
    @error('cSellUnit')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- UOM Item Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bUOMItem', 'UOM Item<span class="required-marker">*</span>', '', false) !!}
    <div class="mt-2">
        {!! Form::hidden('bUOMItem', 0) !!}
        {!! Form::checkbox('bUOMItem', '1', null) !!}
    </div>
    @error('bUOMItem')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Dimension Item Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bDimensionItem', 'Dimension Item<span class="required-marker">*</span>', '', false) !!}
    <div class="mt-2">
        {!! Form::hidden('bDimensionItem', 0) !!}
        {!! Form::checkbox('bDimensionItem', '1', null) !!}
    </div>
    @error('bDimensionItem')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Active Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ItemActive', 'Active<span class="required-marker">*</span>', '', false) !!}
    <div class="mt-2">
        {!! Form::hidden('ItemActive', 0) !!}
        {!! Form::checkbox('ItemActive', '1', null) !!}
    </div>
    @error('ItemActive')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Warehouse Field -->
<div class="form-group col-sm-6">
    {!! Form::label('WhseItem', 'Warehouse Item<span class="required-marker">*</span>', '', false) !!}
    <div class="mt-2">
        {!! Form::hidden('WhseItem', 0) !!}
        {!! Form::checkbox('WhseItem', '1', null) !!}
    </div>
    @error('WhseItem')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Serial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('SerialItem', 'Serial Item<span class="required-marker">*</span>', '', false) !!}
    <div class="mt-2">
        {!! Form::hidden('SerialItem', 0) !!}
        {!! Form::checkbox('SerialItem', '1', null) !!}
    </div>
    @error('SerialItem')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Allow Dupe Serial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AllowDupeSerial', 'Allow Dupe Serial<span class="required-marker">*</span>', '', false) !!}
    <div class="mt-2">
        {!! Form::hidden('AllowDupeSerial', 0) !!}
        {!! Form::checkbox('AllowDupeSerial', '1', null) !!}
    </div>
    @error('AllowDupeSerial')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Allow Strict Serial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AllowStrictSerial', 'Allow Strict Serial<span class="required-marker">*</span>', '', false) !!}
    <div class="mt-2">
        {!! Form::hidden('AllowStrictSerial', 0) !!}
        {!! Form::checkbox('AllowStrictSerial', '1', null) !!}
    </div>
    @error('AllowStrictSerial')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- BOM Item Field -->
<div class="form-group col-sm-6">
    {!! Form::label('BOMItem', 'BOM Item<span class="required-marker">*</span>', '', false) !!}
    <div class="mt-2">
        {!! Form::hidden('BOMItem', 0) !!}
        {!! Form::checkbox('BOMItem', '1', null) !!}
    </div>
    @error('BOMItem')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Commission Item Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bCommissionItem', 'Commission Item<span class="required-marker">*</span>', '', false) !!}
    <div class="mt-2">
        {!! Form::hidden('bCommissionItem', 0) !!}
        {!! Form::checkbox('bCommissionItem', '1', null) !!}
    </div>
    @error('bCommissionItem')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Lot Item Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bLotItem', 'Lot Item<span class="required-marker">*</span>', '', false) !!}
    <div class="mt-2">
        {!! Form::hidden('bLotItem', 0) !!}
        {!! Form::checkbox('bLotItem', '1', null) !!}
    </div>
    @error('bLotItem')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<!-- Allow Negative Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bAllowNegStock', 'Allow Negative<span class="required-marker">*</span>', '', false) !!}
    <div class="mt-2">
        {!! Form::hidden('bAllowNegStock', 0) !!}
        {!! Form::checkbox('bAllowNegStock', '1', null) !!}
    </div>
    @error('bAllowNegStock')
        <div class="error text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('inventories.index') }}" class="btn btn-primary">Cancel</a>
</div>
