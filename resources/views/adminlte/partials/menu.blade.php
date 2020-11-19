<ul class="nav side-menu">
    <li><a><i class="fa fa-barcode"></i> Inventory <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            @can('read_stock_group')
                <li>
                    <a href="{!!  route('stk_group.index') !!}">Stock Group</a>
                </li>
            @endcan
        </ul>
    </li>
    <li><a><i class="fa fa-unlock"></i> Roles <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            @can('read_roles')
                <li>
                    <a href="{!!  route('role.index') !!}">Roles</a>
                </li>
            @endcan
            <li>
                <a href="{!!  route('permissions.index') !!}">Permissions</a>
            </li>
        </ul>
    </li>
</ul>
