<ul class="nav side-menu">
    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="index.html">Dashboard</a></li>
            <li><a href="index2.html">Dashboard2</a></li>
            <li><a href="index3.html">Dashboard3</a></li>
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
