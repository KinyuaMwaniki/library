<?php

// Add menus, submenus, and their permissions

return [
    'permissions' => [        
        'Inventory' => [
            'Stock Group' => [
                'create_stock_group',
                'read_stock_group',
                'update_stock_group',
                'delete_stock_group',
            ]
        ],

        'Access Control Menu' => [
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