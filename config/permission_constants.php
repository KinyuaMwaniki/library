<?php

// Add menus, submenus, and their permissions

return [
    'permissions' => [        
        'User Management' => [
            'Users' => [
                'create_users',
                'read_users',
                'update_users',
                'delete_users',
            ]
        ],

        'Access Control' => [
            'Roles' => [
                'create_roles',
                'read_roles',
                'update_roles',
                'delete_roles',
            ],
            'Permissions' => [
                'create_permissions',
                'read_permissions',
                'update_permissions',
                'delete_permissions',
            ],
        ],
    ]
];