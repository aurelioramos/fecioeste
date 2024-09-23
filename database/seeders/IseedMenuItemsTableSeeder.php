<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IseedMenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Dashboard',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 10,
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 11,
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 12,
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 13,
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 14,
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Categories',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-categories',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
                'route' => 'voyager.categories.index',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Posts',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-news',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
                'route' => 'voyager.posts.index',
                'parameters' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Pages',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2024-09-22 02:40:32',
                'updated_at' => '2024-09-22 02:40:32',
                'route' => 'voyager.pages.index',
                'parameters' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Areas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-study',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 15,
                'created_at' => '2024-09-22 04:14:01',
                'updated_at' => '2024-09-22 04:14:01',
                'route' => 'voyager.areas.index',
                'parameters' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'menu_id' => 1,
                'title' => 'Projetos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-documentation',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 16,
                'created_at' => '2024-09-22 05:14:54',
                'updated_at' => '2024-09-22 05:14:54',
                'route' => 'voyager.projetos.index',
                'parameters' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'menu_id' => 1,
                'title' => 'Escolas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-company',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 17,
                'created_at' => '2024-09-22 05:18:10',
                'updated_at' => '2024-09-22 05:18:10',
                'route' => 'voyager.escolas.index',
                'parameters' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'menu_id' => 1,
                'title' => 'Quesitos Avaliativos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-diamond',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 18,
                'created_at' => '2024-09-22 05:25:04',
                'updated_at' => '2024-09-22 05:25:04',
                'route' => 'voyager.quesitos-avaliativos.index',
                'parameters' => NULL,
            ),
        ));
        
        
    }
}