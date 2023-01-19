<?php

class Menu extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams)
    {
        $this->getMenu();

        return $this->arResult;
    }

    public function  executeComponent()
    {
        $this->IncludeComponentTemplate();
    }

    public function getMenu()
    {
        $this->arResult['menu'] = [
            ['link' => '/index.php', 'title' => 'Home', 'submenu' => false],
            ['link' => '/about/index.php', 'title' => 'About Me', 'submenu' => false],
            ['link' => '/contact/index.php', 'title' => 'Contact', 'submenu' => false],
            ['link' => '#', 'title' => 'Pages', 'submenu' =>
                [
                    ['link' => '/postleftsidebar/index.php', 'title' => 'Left Sidebar', 'submenu' => false],
                    ['link' => '/postrightsidebar/index.php', 'title' => 'Right Sidebar', 'submenu' => false],
                    ['link' => '/postcentered/index.php', 'title' => 'Centered Post', 'submenu' => false],
                    ['link' => '/404.php', 'title' => 'Page 404', 'submenu' => false],
                    ['link' => '/comingsoon/index.php', 'title' => 'Coming Soon', 'submenu' => false],
                    ['link' => '/shortcodes/index.php', 'title' => 'Shortcodes', 'submenu' => false],
                ]],
        ];
    }
}

