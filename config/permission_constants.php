<?php

// Add menus, submenus, and their permissions and then run seeder

return [
    'permissions' => [        
        'Settings Menu' => [
            'Users' => [
                'create_users',
                'read_users',
                'update_users',
                'delete_users',
            ],
            'Roles' => [
                'create_roles',
                'read_roles',
                'update_roles',
                'delete_roles',
            ],
            'Permissions' => [
                'update_permissions',
            ],
            'System Settings' => [
                'read_settings',
                'create_settings',
                'read_settings',
                'update_settings',
                'delete_settings',
            ],
        ],
        'Students Menu' => [
            'Students' => [
                'read_students',
                'create_students',
                'update_students',
                'delete_students',
            ]
        ],
        'Books Menu' => [
            'Books' => [
                'read_books',
                'create_books',
                'update_books',
                'delete_books',
            ],
            'Issuances' => [
                'read_issuances',
                'create_issuances',
                'update_issuances',
                'delete_issuances',
            ]
        ]
    ]
];







