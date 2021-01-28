<ul class="nav side-menu">
    @canany(['read_students'])
        <li>
            <a href="{!!  route('home') !!}"><i class="fa fa-home"></i>Home</a>
        </li>
    @endcan
</ul>
<ul class="nav side-menu">
    @canany(['read_students'])
        <li>
            <a href="{!!  route('students.index') !!}"><i class="fa fa-users"></i>Students</a>
        </li>
    @endcan
</ul>
<ul class="nav side-menu">
    @canany(['read_books'])
        <li><a><i class="fa fa-book"></i> Books <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                @canany(['read_books'])
                    <li>
                        <a href="{!!  route('books.index') !!}">Books</a>
                    </li>
                    <li>
                        <a href="{!!  route('genres.index') !!}">Genres</a>
                    </li>
                @endcan
            </ul>
        </li>
    @endcan
</ul>

<ul class="nav side-menu">
    @canany(['read_roles', 'update_permissions', 'read_settings', 'read_users'])
        <li><a><i class="fa fa-unlock"></i> Settings <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                @can('read_users')
                <li>
                    <a href="{!!  route('user.index') !!}">Users</a>
                </li>
                @endcan
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
