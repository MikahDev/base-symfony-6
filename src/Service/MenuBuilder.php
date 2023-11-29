<?php

namespace App\Service;

class MenuBuilder
{
    public function __construct(
        private array $menuItems = [
            [
                'title' => 'User',
                'route' => 'app_user_index',
                'icon' => 'bx-home-circle',
                // 'roles' => ['ROLE_USER'], // for role-based items
                // 'children' => [...], // for submenus
            ],
            // ... other menu items
        ]
    ) {}

    public function getMenu(): array
    {
        // Add logic here to filter or modify menu items based on conditions
        return $this->menuItems;
    }
}