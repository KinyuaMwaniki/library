<ul class="nav side-menu">
    @canany(['read_stock_group', 'read_stock_costing'])
    <li><a><i class="fa fa-barcode"></i> Inventory <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            @can('read_inventories')
                <li>
                    <a href="{!!  route('inventories.index') !!}">Inventory</a>
                </li>
            @endcan
            @can('read_stock_group')
                <li>
                    <a href="{!!  route('stk_group.index') !!}">Stock Group</a>
                </li>
            @endcan
            @can('read_stock_costing')
                <li>
                    <a href="{!!  route('stk_costing.index') !!}">Stock Costing</a>
                </li>
            @endcan
        </ul>
    </li>
@endcan
@canany(['read_taxes'])
<li><a><i class="fa fa-tumblr"></i>Taxes<span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu">
        @can('read_taxes')
            <li>
                <a href="{!!  route('taxes.index') !!}">Taxes Master</a>
            </li>
        @endcan
    </ul>
</li>
@endcan
@canany(['read_roles', 'update_permissions', 'read_settings'])
<li><a><i class="fa fa-unlock"></i> Settings <span class="fa fa-chevron-down"></span></a>
<ul class="nav child_menu">
    @can('read_roles')
        <li>
            <a href="{!!  route('role.index') !!}">Roles</a>
        </li>
    @endcan
    @can('update_permissions')
        <li>
            <a href="{!!  route('permissions.index') !!}">Permissions</a>
        </li>
    @endcan
    @can('read_settings')
        <li>
            <a href="{!!  route('settings.index') !!}">System Settings</a>
        </li>
    @endcan
</ul>
</li>
@endcan
</ul>
