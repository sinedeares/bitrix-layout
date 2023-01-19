<?php

class Masonry extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams)
    {
        $this->arParams = $arParams;

        $this->getMasonry();

        return $this->arParams;
    }

    public function executeComponent()
    {
        $this->IncludeComponentTemplate();
    }

    public function getMasonry()
    {
        $this->arParams['masonry'] = [
            ['title' => 'design', 'classFigure' => 'square', 'imgSource' => SITE_TEMPLATE_PATH . '/img/placeholder.jpg',
                'pageLink' => '/postcentered/index.php', 'linkText' => 'Wood package',
                'itemText' => 'Competently extend distributed web through interdependent...',
                'comments' => '6 comments'],

            ['title' => 'inspiration', 'classFigure' => 'rectangle-big', 'imgSource' => SITE_TEMPLATE_PATH . '/img/placeholder.jpg',
                'pageLink' => '/postcentered/index.php', 'linkText' => 'Skate shadow',
                'itemText' => 'Competently extend distributed web through interdependent...',
                'comments' => '6 comments'],

            ['title' => 'photography', 'classFigure' => 'rectangle', 'imgSource' => SITE_TEMPLATE_PATH . '/img/placeholder.jpg',
                'pageLink' => '/postcentered/index.php', 'linkText' => 'Dark beauty',
                'itemText' => 'Competently extend distributed web through interdependent...',
                'comments' => '6 comments'],

            ['title' => 'inspiration', 'classFigure' => 'square', 'imgSource' => SITE_TEMPLATE_PATH . '/img/placeholder.jpg',
                'pageLink' => '/postcentered/index.php', 'linkText' => 'In the square',
                'itemText' => 'Competently extend distributed web through interdependent...',
                'comments' => '6 comments'],

            ['title' => 'adventure', 'classFigure' => 'rectangle', 'imgSource' => SITE_TEMPLATE_PATH . '/img/placeholder.jpg',
                'pageLink' => '/postcentered/index.php', 'linkText' => 'Real hipster',
                'itemText' => 'Competently extend distributed web through interdependent...',
                'comments' => '6 comments'],

            ['title' => 'photography', 'classFigure' => 'square', 'imgSource' => SITE_TEMPLATE_PATH . '/img/placeholder.jpg',
                'pageLink' => '/postcentered/index.php', 'linkText' => 'Safe with style',
                'itemText' => 'Competently extend distributed web through interdependent...',
                'comments' => '6 comments'],

            ['title' => 'adventure', 'classFigure' => 'rectangle', 'imgSource' => SITE_TEMPLATE_PATH . '/img/placeholder.jpg',
                'pageLink' => '/postcentered/index.php', 'linkText' => 'Bottles battle',
                'itemText' => 'Competently extend distributed web through interdependent...',
                'comments' => '6 comments'],

            ['title' => 'design', 'classFigure' => 'square', 'imgSource' => SITE_TEMPLATE_PATH . '/img/placeholder.jpg',
                'pageLink' => '/postcentered/index.php', 'linkText' => 'Accessories for her',
                'itemText' => 'Competently extend distributed web through interdependent...',
                'comments' => '6 comments'],

            ['title' => 'adventure', 'classFigure' => 'rectangle-big', 'imgSource' => SITE_TEMPLATE_PATH . '/img/placeholder.jpg',
                'pageLink' => '/postcentered/index.php', 'linkText' => 'Flight around coast',
                'itemText' => 'Competently extend distributed web through interdependent...',
                'comments' => '6 comments'],

            ['title' => 'inspiration', 'classFigure' => 'rectangle', 'imgSource' => SITE_TEMPLATE_PATH . '/img/placeholder.jpg',
                'pageLink' => '/postcentered/index.php', 'linkText' => 'Say something',
                'itemText' => 'Competently extend distributed web through interdependent...',
                'comments' => '6 comments'],

            ['title' => 'design', 'classFigure' => 'square', 'imgSource' => SITE_TEMPLATE_PATH . '/img/placeholder.jpg',
                'pageLink' => '/postcentered/index.php', 'linkText' => 'Abstractify',
                'itemText' => 'Competently extend distributed web through interdependent...',
                'comments' => '6 comments'],

            ['title' => 'design', 'classFigure' => 'square', 'imgSource' => SITE_TEMPLATE_PATH . '/img/placeholder.jpg',
                'pageLink' => '/postcentered/index.php', 'linkText' => 'Lost island',
                'itemText' => 'Competently extend distributed web through interdependent...',
                'comments' => '6 comments'],
        ];

    }

}
