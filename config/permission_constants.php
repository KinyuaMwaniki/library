<?php

// Add menus, submenus, and their permissions

return [
    'permissions' => [        
        'Inventory Menu' => [
            'Inventory List' => [
                'create_inventory',
                'read_inventory',
                'update_inventory',
                'delete_inventory',
            ],
            'Transfer Inventory' => [
                'create_transfer_inventory',
                'read_transfer_inventory',
                'update_transfer_inventory',
                'delete_transfer_inventory',
            ],
            'Internal Grn' => [
                'create_internal_grn',
                'read_internal_grn',
                'update_internal_grn',
                'delete_internal_grn',
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
                'create_permissions',
                'read_permissions',
                'update_permissions',
                'delete_permissions',
            ],
        ],
    ]
];