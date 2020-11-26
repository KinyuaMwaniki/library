<?php

// Add menus, submenus, and their permissions and then run seeder

return [
    'permissions' => [        
        'Inventory Menu' => [
            'Inventory' => [
                'create_inventories',
                'read_inventories',
                'update_inventories',
                'delete_inventories',
            ],
            'Stock Group' => [
                'create_stock_group',
                'read_stock_group',
                'update_stock_group',
                'delete_stock_group',
            ],
            'Stock Costing' => [
                'create_stock_costing',
                'read_stock_costing',
                'update_stock_costing',
                'delete_stock_costing',
            ],
        ],

        'Taxes Menu' => [
            'Tax Master' => [
                'create_taxes',
                'read_taxes',
                'update_taxes',
                'delete_taxes',
            ]
        ],

        'Settings Menu' => [
            'User Roles' => [
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
    ]
];






