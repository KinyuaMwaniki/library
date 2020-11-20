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
            ],
            'Stock Costing' => [
                'create_stock_costing',
                'read_stock_costing',
                'update_stock_costing',
                'delete_stock_costing',
            ],
        ],

        'Access Control Menu' => [
            'Roles' => [
                'create_roles',
                'read_roles',
                'update_roles',
                'delete_roles',
            ],
            'Permissions' => [
                'update_permissions',
            ],
        ],
    ]
];


