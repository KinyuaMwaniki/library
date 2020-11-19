<ul class="nav side-menu">
    <li><a><i class="fa fa-user"></i>User Management<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            @can('read_users')
            <li>
                <a href="{!!  route('user.index') !!}">Users</a>
            </li>
            @endcan
        </ul>
    </li>
    <li><a><i class="fa fa-unlock"></i>Access Control<span class="fa fa-chevron-down"></span></a>
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
