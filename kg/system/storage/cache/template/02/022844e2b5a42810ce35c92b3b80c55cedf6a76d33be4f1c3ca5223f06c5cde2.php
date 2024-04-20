<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* kg/template/common/header.twig */
class __TwigTemplate_1f3ec6ab064ed3c83074c312d0a910bed9136f3724fffd4adef347858a80f28d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"ru-RU\">

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>Hikvision-Shop.ru | Качественный официальный интернет магазин</title>
\t\t<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/thumbs/resize/180x180/uploads/settings/76851488864ae9206d3a20.png\">
\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/thumbs/resize/32x32/uploads/settings/76851488864ae9206d3a20.png\">
\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/thumbs/resize/16x16/uploads/settings/76851488864ae9206d3a20.png\">
\t\t<link rel=\"shortcut icon\" href=\"/favicon.ico?v=1407429662\">
\t\t<link rel=\"manifest\" href=\"./catalog/view/theme/kg/assas/resources/manifest.json\">
\t\t<meta name=\"msapplication-config\" content=\"/browserconfig.xml?v=1407429662\">
\t\t<meta name=\"theme-color\" content=\"#ffffff\">
\t\t<meta name=\"keywords\" content=\"Laitcom | Специализированный магазин | lait-shop\">
\t\t<meta name=\"description\" content=\"На сегодняшний момент фирма стала одним из лидеров среди поставщиков качественного видео-оборудования. Клиентами компании являются не только частные лица, но и финансовые организации (банки, налоговые и пенсионные фонды), транспортные компании, образов...\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta property=\"og:url\" content=\"https://www.hikvision-shop.ru/\">
\t\t<meta property=\"og:type\" content=\"website\">
\t\t<meta property=\"og:title\" content=\"Hikvision-Shop.ru | Качественный официальный интернет магазин\">
\t\t<meta property=\"og:image\" content=\"/thumbs/resize/230x60/uploads/settings/66017880964ae9206d36ce.png\">
\t\t<meta property=\"og:locale\" content=\"ru-RU\">
\t\t<meta property=\"og:description\" content=\"На сегодняшний момент фирма стала одним из лидеров среди поставщиков качественного видео-оборудования. Клиентами компании являются не только частные лица, но и финансовые организации (банки, налоговые и пенсионные фонды), транспортные компании, образов...\">
\t\t<meta property=\"twitter:url\" content=\"https://www.hikvision-shop.ru/\">
\t\t<meta name=\"twitter:title\" content=\"Hikvision-Shop.ru | Качественный официальный интернет магазин\">
\t\t<meta name=\"twitter:image\" content=\"/thumbs/resize/230x60/uploads/settings/66017880964ae9206d36ce.png\">
\t\t<meta name=\"twitter:card\" content=\"summary_large_image\">
\t\t<meta name=\"twitter:description\" content=\"На сегодняшний момент фирма стала одним из лидеров среди поставщиков качественного видео-оборудования. Клиентами компании являются не только частные лица, но и финансовые организации (банки, налоговые и пенсионные фонды), транспортные компании, образов...\">
\t\t<meta name=\"google-site-verification\" content=\"tV_zY3OvNZsarp2QD1u9O0Hqbc4B_Dn2PWvtzA8twME\"/>
\t\t<meta name='yandex-verification' content='7ada0da6509173e7'/>
\t\t<meta name=\"csrf-param\" content=\"_csrf-frontend\">
\t\t<meta name=\"csrf-token\" content=\"gORys5pcU3Y3_f5RvCGfSaeL7TqOMKQiB5WO0yq9bfvjpiGe3goXMg7OsSLpV_ItlsneDLZ11mxtuO-4RdwmvQ==\">
\t\t<link href=\"https://www.hikvision-shop.ru/\" rel=\"canonical\">
\t\t<link href=\"./catalog/view/theme/kg/assas/css/variables.css\" rel=\"stylesheet\">
\t\t<link href=\"./catalog/view/theme/kg/assas/resources/style_1.css\" rel=\"stylesheet\">
\t\t<link href=\"./catalog/view/theme/kg/assas/resources/style._2.css\" rel=\"stylesheet\">
\t\t<style>
\t\t\t@media screen and(min-width: 769px) {
\t\t\t\t.mobile {
\t\t\t\t\tdisplay: none !important;
\t\t\t\t}
\t\t\t}
\t\t</style>
\t\t <script>var daDataToken = \"ef2b71af0b4325941ef6af7f9631a366a4c16640\";
\t\t\t\t        var comparisonProductsIds = [];
\t\t\t\t        var mapMarkUrl = \"\\/thumbs\\/color\\/D71921\\/img\\/delivery\\/mark.svg\";
\t\t\t\t        var inputmask_8b2a4bfb = { \"mask\": \"+7 (999) 999-99-99\" };</script>
\t</head>

\t<body itemtype=\"https://schema.org/WebPage\" itemscope>
\t\t<div id=\"loader-overlay\" class=\"loader-overlay\">
\t\t\t<div class=\"loader\"></div>
\t\t</div>
\t\t<header class=\"page-header\">
\t\t\t<div class=\"wrapper\" id=\"accordion-menu\">
\t\t\t\t<nav class=\"mobile navbar m-navbar navbar-light\">
\t\t\t\t\t<div class=\"m-navbar__item\">
\t\t\t\t\t\t<button class=\"m-navbar-toggler-menu\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggleMenu\" aria-controls=\"navbarToggleMenu\" aria-expanded=\"false\" aria-label=\"Каталог\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon m-navbar-toggler-menu-icon\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"m-navbar__item m-navbar__logo\">
\t\t\t\t\t\t<a href=\"/\" class=\"logo m-logo\" aria-label=\"Перейти на главную страницу сайта\">
\t\t\t\t\t\t\t<img class=\"m-logo__image\" title=\"Логотип\" alt=\"\" src=\"/thumbs/resize/170x20/uploads/settings/66017880964ae9206d36ce.png\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 81
        echo "\t\t\t\t</nav>
\t\t\t\t<div class=\"mobile collapse m-collapse\" id=\"navbarToggleMenu\" data-parent=\"#accordion-menu\">
\t\t\t\t\t<div class=\"m-collapse__menu\">
\t\t\t\t\t\t<div class=\"site-info m-site-info\">
\t\t\t\t\t\t\t<div class=\"mobile site-info-block\">
\t\t\t\t\t\t\t\t<div class=\"site-info-images\">
\t\t\t\t\t\t\t\t\t<div class=\"site-info-brand\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"/thumbs/resize/160x100/uploads/settings/94522862364ae9206d391e.png\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t\t<div class=\"site-info-cert\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"/thumbs/resize/78x110/uploads/settings/16673753264b446664d827.jpg\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"site-info-description\">
\t\t\t\t\t\t\t\t\tСпециализированный сайт по продукции
\t\t\t\t\t\t\t\t\t<strong>Hikvision</strong>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary m-menu-collapse__btn-show-catalog\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-label=\"Каталог товаров\" data-target=\"#navbarToggleCatalog\" aria-controls=\"navbarToggleCatalog\">
\t\t\t\t\t\t\t<img src=\"\" alt=\"\" class=\"lazyload m-menu-collapse__btn-show-catalog-image\" data-src=\"/thumbs/color/FFFFFF/img/catalog.png\"/>Каталог товаров
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<ul class=\"mobile m-nav m-nav_vertical\">
\t\t\t\t\t\t\t<li class=\"m-nav__item m-nav__item_vertical\">
\t\t\t\t\t\t\t\t<a class=\"m-nav__link m-nav__link_vertical\" href=\"/cart\" aria-label=\"Перейти в корзину\">
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-icon-container\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-basket m-nav__link-icon m-nav__link-icon_vertical\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text_vertical\">Корзина</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-nav__item m-nav__item_vertical\">
\t\t\t\t\t\t\t\t<a class=\"m-nav__link m-nav__link_vertical\" href=\"/help\">
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-icon-container\">
\t\t\t\t\t\t\t\t\t\t<img class=\"m-nav__link-icon2 m-nav__link-icon_vertical\" title=\"Помощь\" alt=\"\" src=\"/thumbs/color/D71921/uploads/pages/icons/1996334187647b0b5ccce04.svg\"/>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text_vertical\">Помощь</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-nav__item m-nav__item_vertical\">
\t\t\t\t\t\t\t\t<a class=\"m-nav__link m-nav__link_vertical\" href=\"/warranty\">
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-icon-container\">
\t\t\t\t\t\t\t\t\t\t<img class=\"m-nav__link-icon2 m-nav__link-icon_vertical\" title=\"Гарантия\" alt=\"\" src=\"/thumbs/color/D71921/uploads/pages/icons/1758731933647b0b820c703.svg\"/>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text_vertical\">Гарантия</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-nav__item m-nav__item_vertical\">
\t\t\t\t\t\t\t\t<a class=\"m-nav__link m-nav__link_vertical\" href=\"/payment\">
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-icon-container\">
\t\t\t\t\t\t\t\t\t\t<img class=\"m-nav__link-icon2 m-nav__link-icon_vertical\" title=\"Оплата\" alt=\"\" src=\"/thumbs/color/D71921/uploads/pages/icons/1180068136647b0b8de3de5.svg\"/>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text_vertical\">Оплата</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-nav__item m-nav__item_vertical\">
\t\t\t\t\t\t\t\t<a class=\"m-nav__link m-nav__link_vertical\" href=\"/delivery\">
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-icon-container\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-truck m-nav__link-icon m-nav__link-icon_vertical\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text_vertical\">Доставка</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-nav__item m-nav__item_vertical\">
\t\t\t\t\t\t\t\t<a class=\"m-nav__link m-nav__link_vertical\" href=\"/contacts\">
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-icon-container\">
\t\t\t\t\t\t\t\t\t\t<img class=\"m-nav__link-icon2 m-nav__link-icon_vertical\" title=\"Контакты\" alt=\"\" src=\"/thumbs/color/D71921/uploads/pages/icons/1884571839647b0bc95f444.svg\"/>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text_vertical\">Контакты</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-nav__item m-nav__item_vertical\">
\t\t\t\t\t\t\t\t<a class=\"m-nav__link m-nav__link_vertical\" href=\"/products/viewed\" aria-label=\"Перейти в просмотренные товары\">
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-icon-container\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eye m-nav__link-icon m-nav__link-icon_vertical\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text_vertical\">Просмотрено</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"m-nav__item m-nav__item_vertical\">
\t\t\t\t\t\t\t\t<a class=\"m-nav__link m-nav__link_vertical\" href=\"/login\" data-toggle=\"modal\" data-target=\"#login-dialog\">
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-icon-container\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user m-nav__link-icon m-nav__link-icon_vertical\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text_vertical\">Войти</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"m-collapse__backdrop\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#navbarToggleMenu\" aria-controls=\"navbarToggleMenu\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mobile collapse m-collapse\" id=\"navbarToggleContacts\" data-parent=\"#accordion-menu\">
\t\t\t\t\t<div class=\"collapse-control-wrapper\">
\t\t\t\t\t\t<div class=\"collapse-control\">
\t\t\t\t\t\t\t<button class=\"collapse-control__button\" type=\"button\" data-toggle=\"collapse\" aria-label=\"Закрыть контакты\" aria-expanded=\"false\" data-target=\"#navbarToggleContacts\" aria-controls=\"navbarToggleContacts\">
\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\" class=\"lazyload collapse-control__button-image\" data-src=\"/thumbs/color/080806/img/arrow_left.png\"/>
\t\t\t\t\t\t\t\t<span class=\"collapse-control__title\">Контакты</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button class=\"collapse-control__button collapse-control__button-close\" type=\"button\" data-toggle=\"collapse\" aria-label=\"Закрыть контакты\" aria-expanded=\"false\" data-target=\"#navbarToggleContacts\" aria-controls=\"navbarToggleContacts\">
\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\" class=\"lazyload collapse-control__button-close-image\" data-src=\"/thumbs/color/080806/img/cross.png\"/>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"m-collapse__contacts\">
\t\t\t\t\t\t<div class=\"site-info m-site-info m-0\">
\t\t\t\t\t\t\t<div class=\"mobile site-info-block\">
\t\t\t\t\t\t\t\t<div class=\"site-info-images\">
\t\t\t\t\t\t\t\t\t<div class=\"site-info-brand\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"/thumbs/resize/160x100/uploads/settings/94522862364ae9206d391e.png\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t\t<div class=\"site-info-cert\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"/thumbs/resize/78x110/uploads/settings/16673753264b446664d827.jpg\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"site-info-description\">
\t\t\t\t\t\t\t\t\tСпециализированный сайт по продукции
\t\t\t\t\t\t\t\t\t<strong>Hikvision</strong>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"mobile contacts-block\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"tel:+74954324141\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t\t\t\t\t\t+7 (495) 432-41-41
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-callback-link\">
\t\t\t\t\t\t\t\t\t<a class=\"callback-link\" data-toggle=\"modal\" data-target=\"#callback-dialog\">Заказать
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    обратный звонок</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"mailto:info@Hikvision-Shop.ru\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t\tinfo@Hikvision-Shop.ru
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link whatsapp-link\" href=\"https://wa.me/+79361323454\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-whatsapp\"></i>
\t\t\t\t\t\t\t\t\t\tWhatsApp: 8 (936) 132-34-54
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"https://t.me/ShopMSK1\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/thumbs/color/D71921/img/telegram.svg\" alt=\"\" width=\"17\" height=\"17\"/>
\t\t\t\t\t\t\t\t\t\tTelegram: ShopMSK1
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"m-collapse__backdrop\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#navbarToggleContacts\" aria-controls=\"navbarToggleContacts\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mobile collapse m-collapse\" id=\"navbarToggleCatalog\" data-parent=\"#accordion-menu\">
\t\t\t\t\t<div class=\"collapse-control-wrapper pb-0\">
\t\t\t\t\t\t<div class=\"collapse-control\">
\t\t\t\t\t\t\t<button class=\"collapse-control__button\" type=\"button\" data-toggle=\"collapse\" aria-label=\"Закрыть каталог\" aria-expanded=\"false\" data-target=\"#navbarToggleCatalog\" aria-controls=\"navbarToggleCatalog\">
\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\" class=\"lazyload collapse-control__button-image\" data-src=\"/thumbs/color/080806/img/arrow_left.png\"/>
\t\t\t\t\t\t\t\t<span class=\"collapse-control__title\">Каталог товаров</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button class=\"collapse-control__button collapse-control__button-close\" type=\"button\" data-toggle=\"collapse\" aria-label=\"Закрыть каталог\" aria-expanded=\"false\" data-target=\"#navbarToggleCatalog\" aria-controls=\"navbarToggleCatalog\">
\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\" class=\"lazyload collapse-control__button-close-image\" data-src=\"/thumbs/color/080806/img/cross.png\"/>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"search-line\">
\t\t\t\t\t\t<form class=\"search_form\" role=\"search\" method=\"get\" action=\"/search\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input class=\"form-control search-line__input\" type=\"search\" name=\"q\" value=\"\" autocomplete=\"off\" placeholder=\"Поиск среди тысяч товаров\"/>
\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary search-btn\" type=\"submit\" aria-label=\"Найти на сайте\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"search-line__dropdown-content\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"m-collapse__catalog\">
\t\t\t\t\t\t";
        // line 262
        echo ($context["menu"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"m-collapse__backdrop\" data-toggle=\"collapse\" aria-expanded=\"false\" data-target=\"#navbarToggleCatalog\" aria-controls=\"navbarToggleCatalog\"></div>
\t\t\t\t</div>
\t\t\t\t<nav class=\"desktop page-menu\">
\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/help\">
\t\t\t\t\t\t\t\t<img class=\"nav-item__icon\" title=\"Помощь\" alt=\"\" src=\"/thumbs/color/B3B3B3/uploads/pages/icons/1996334187647b0b5ccce04.svg\"/>
\t\t\t\t\t\t\t\t<img class=\"nav-item__icon-hover\" title=\"Помощь\" alt=\"\" src=\"/thumbs/color/D71921/uploads/pages/icons/1996334187647b0b5ccce04.svg\"/>
\t\t\t\t\t\t\t\tПомощь
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/warranty\">
\t\t\t\t\t\t\t\t<img class=\"nav-item__icon\" title=\"Гарантия\" alt=\"\" src=\"/thumbs/color/B3B3B3/uploads/pages/icons/1758731933647b0b820c703.svg\"/>
\t\t\t\t\t\t\t\t<img class=\"nav-item__icon-hover\" title=\"Гарантия\" alt=\"\" src=\"/thumbs/color/D71921/uploads/pages/icons/1758731933647b0b820c703.svg\"/>
\t\t\t\t\t\t\t\tГарантия
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/payment\">
\t\t\t\t\t\t\t\t<img class=\"nav-item__icon\" title=\"Оплата\" alt=\"\" src=\"/thumbs/color/B3B3B3/uploads/pages/icons/1180068136647b0b8de3de5.svg\"/>
\t\t\t\t\t\t\t\t<img class=\"nav-item__icon-hover\" title=\"Оплата\" alt=\"\" src=\"/thumbs/color/D71921/uploads/pages/icons/1180068136647b0b8de3de5.svg\"/>
\t\t\t\t\t\t\t\tОплата
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/delivery\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-truck\"></i>
\t\t\t\t\t\t\t\tДоставка
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/contacts\">
\t\t\t\t\t\t\t\t<img class=\"nav-item__icon\" title=\"Контакты\" alt=\"\" src=\"/thumbs/color/B3B3B3/uploads/pages/icons/1884571839647b0bc95f444.svg\"/>
\t\t\t\t\t\t\t\t<img class=\"nav-item__icon-hover\" title=\"Контакты\" alt=\"\" src=\"/thumbs/color/D71921/uploads/pages/icons/1884571839647b0bc95f444.svg\"/>
\t\t\t\t\t\t\t\tКонтакты
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\">
\t\t\t\t\t\t\t\t<img src=\"/thumbs/color/B3B3B3/img/time.svg\" class=\"nav-item__icon\" title=\"Часы работы\" alt=\"\"/>
\t\t\t\t\t\t\t\t<img src=\"/thumbs/color/D71921/img/time.svg\" class=\"nav-item__icon-hover\" title=\"Часы работы\" alt=\"\"/>
\t\t\t\t\t\t\t\t10.00 - 18.00
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t\t<ul class=\"desktop user-menu\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/login\" data-toggle=\"modal\" data-target=\"#login-dialog\">
\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t<span>Вход</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/signup\">
\t\t\t\t\t\t\t<span>Регистрация</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<dialog id=\"login-dialog\" class=\"modal-custom\">
\t\t\t\t\t<button class=\"dialog-close-btn\" data-dismiss=\"modal\" type=\"button\">
\t\t\t\t\t\t<img src=\"/img/cross.svg\" alt=\"\"/>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"dialog-title\">Вход</div>
\t\t\t\t\t<div class=\"dialog-sub-title\">Если у Вас есть зарегистрированный акаунт,<br>
\t\t\t\t\t\tпожалуйста авторизуйтесь
\t\t\t\t\t</div>
\t\t\t\t\t<form id=\"w0\" action=\"/login\" method=\"post\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf-frontend\" value=\"gORys5pcU3Y3_f5RvCGfSaeL7TqOMKQiB5WO0yq9bfvjpiGe3goXMg7OsSLpV_ItlsneDLZ11mxtuO-4RdwmvQ==\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"form-group field-loginformmodal-email required\">
\t\t\t\t\t\t\t\t<label class=\"required-label\" for=\"loginformmodal-email\">Электронная почта или контактный
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                телефон</label>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"loginformmodal-email\" class=\"form-control\" name=\"LoginFormModal[email]\" aria-required=\"true\">
\t\t\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"form-group field-loginformmodal-password required\">
\t\t\t\t\t\t\t\t<label class=\"required-label\" for=\"loginformmodal-password\">Пароль</label>
\t\t\t\t\t\t\t\t<input type=\"password\" id=\"loginformmodal-password\" class=\"form-control\" name=\"LoginFormModal[password]\" aria-required=\"true\">
\t\t\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"form-group field-loginformmodal-captcha\"><input type=\"hidden\" id=\"loginformmodal-captcha\" class=\"form-control\" name=\"LoginFormModal[captcha]\">
\t\t\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\">Войти</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block\" data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#password-recovery-dialog\">Забыли пароль?</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</dialog>
\t\t\t\t<dialog id=\"password-recovery-dialog\" class=\"modal-custom\">
\t\t\t\t\t<button class=\"dialog-close-btn\" data-dismiss=\"modal\" type=\"button\">
\t\t\t\t\t\t<img src=\"/img/cross.svg\" alt=\"\"/>
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"dialog-title\">Восстановление пароля</div>
\t\t\t\t\t<div class=\"dialog-sub-title\">Ссылка на страницу изменения пароля будет отправлена на адрес Вашей
\t\t\t\t\t\t\t\t\t\t\t\t                    электронной
\t\t\t\t\t\t\t\t\t\t\t\t                    почты.</div>
\t\t\t\t\t<form id=\"w1\" class=\"required-asterisk\" action=\"/request-password-reset\" method=\"post\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf-frontend\" value=\"gORys5pcU3Y3_f5RvCGfSaeL7TqOMKQiB5WO0yq9bfvjpiGe3goXMg7OsSLpV_ItlsneDLZ11mxtuO-4RdwmvQ==\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"form-group field-passwordresetrequestform-email required\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"passwordresetrequestform-email\">Электронная почта</label>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"passwordresetrequestform-email\" class=\"form-control\" name=\"PasswordResetRequestForm[email]\" aria-required=\"true\">
\t\t\t\t\t\t\t\t<div class=\"help-block\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\">Отправить</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block\" data-toggle=\"modal\" data-target=\"#login-dialog\" data-dismiss=\"modal\">Вернуться на форму авторизации</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</dialog>
\t\t\t</div>
\t\t\t<hr/>
\t\t\t<div class=\"desktop shop-info\">
\t\t\t\t<a href=\"/\" class=\"logo\" aria-label=\"Перейти на главную страницу сайта\">
\t\t\t\t\t<img class=\"lazyload\" title=\"Логотип\" alt=\"\" src=\"\" data-src=\"/thumbs/resize/230x60/uploads/settings/66017880964ae9206d36ce.png\"/>
\t\t\t\t</a>
\t\t\t\t<ul class=\"contacts-block\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"tel:+74954324141\">
\t\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>
\t\t\t\t\t\t\t+7 (495) 432-41-41
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"callback-link\" data-toggle=\"modal\" data-target=\"#callback-dialog\">Заказать обратный
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        звонок</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link nav-link__email\" href=\"mailto:info@Hikvision-Shop.ru\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t<span>info@Hikvision-Shop.ru</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"online-block\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link skype-link\" href=\"skype:help-shop\">
\t\t\t\t\t\t\t<i class=\"fa fa-skype\"></i>
\t\t\t\t\t\t\t<span>Звонок онлайн</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link whatsapp-link\" href=\"https://wa.me/+79361323454\" target=\"_blank\">
\t\t\t\t\t\t\t<i class=\"fa fa-whatsapp\"></i>
\t\t\t\t\t\t\tWhatsApp: 8 (936) 132-34-54
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"https://t.me/ShopMSK1\" target=\"_blank\">
\t\t\t\t\t\t\t<img src=\"/thumbs/color/D71921/img/telegram.svg\" alt=\"\" width=\"17\" height=\"17\"/>
\t\t\t\t\t\t\tTelegram: ShopMSK1
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"cart-widget\">
\t\t\t\t\t<div class=\"cart-widget-header\">
\t\t\t\t\t\t<a class=\"cart-icon-link\" href=\"/cart\" aria-label=\"Перейти в корзину\">
\t\t\t\t\t\t\t<i class=\"fa fa-shopping-basket\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"cart-widget-column\">
\t\t\t\t\t\t\t<div class=\"cart-widget-row\">
\t\t\t\t\t\t\t\t<span class=\"cart-widget-title\">Товаров:</span>
\t\t\t\t\t\t\t\t<span class=\"cart-widget-value\">0</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cart-widget-row\">
\t\t\t\t\t\t\t\t<span class=\"cart-widget-title\">Сумма:</span>
\t\t\t\t\t\t\t\t<span class=\"cart-widget-value\" id=\"cart-total-sum\">0,00 ₽</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"/cart\" class=\"btn btn-primary cart-btn\">Оформить заказ</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"search-line\">
\t\t\t\t<form class=\"search_form\" role=\"search\" method=\"get\" action=\"/search\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input class=\"form-control search-line__input\" type=\"search\" name=\"q\" value=\"\" autocomplete=\"off\" placeholder=\"Поиск среди тысяч товаров\"/>
\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary search-btn\" type=\"submit\" aria-label=\"Найти на сайте\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"search-line__dropdown-content\"></div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</header>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<aside class=\"desktop sidebar\">
\t\t\t\t\t<style>
\t\t\t\t\t\t.category-popup-sub-menu {
\t\t\t\t\t\t\tposition: absolute;
\t\t\t\t\t\t\tright: -1029px;
\t\t\t\t\t\t\twidth: 1029px;
\t\t\t\t\t\t\tz-index: 999;
\t\t\t\t\t\t\tdisplay: none;
\t\t\t\t\t\t\tbackground-color: whitesmoke;
\t\t\t\t\t\t\tborder: 2px solid rgb(235, 235, 232);
\t\t\t\t\t\t}

\t\t\t\t\t\t.category-popup-sub-menu_main {
\t\t\t\t\t\t\ttop: -7px;
\t\t\t\t\t\t}

\t\t\t\t\t\t.category-popup-sub-menu_sub {
\t\t\t\t\t\t\tmargin-top: -24px;
\t\t\t\t\t\t}

\t\t\t\t\t\t.category-popup-sub-menu a {
\t\t\t\t\t\t\tcolor: #3d4c4d;
\t\t\t\t\t\t\tfont-weight: 700;
\t\t\t\t\t\t\tfont-size: 14px;
\t\t\t\t\t\t}

\t\t\t\t\t\t.category-popup-sub-menu__inner {
\t\t\t\t\t\t\tflex-wrap: wrap;
\t\t\t\t\t\t\tdisplay: flex;
\t\t\t\t\t\t\tpadding: 10px;
\t\t\t\t\t\t}

\t\t\t\t\t\t.subcategory-li:hover>.category-popup-sub-menu,
\t\t\t\t\t\t.category-item__inner:hover > .category-popup-sub-menu {
\t\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t\t}

\t\t\t\t\t\t.category-popup-sub-menu__link-wrapper {
\t\t\t\t\t\t\tmargin-bottom: 5px;
\t\t\t\t\t\t\tmargin-right: 10px;
\t\t\t\t\t\t\tmargin-left: 10px;
\t\t\t\t\t\t\tborder-bottom: 1px solid rgb(235, 235, 232);
\t\t\t\t\t\t}

\t\t\t\t\t\t.category-popup-sub-menu__item {
\t\t\t\t\t\t\twidth: 20%;
\t\t\t\t\t\t}

\t\t\t\t\t\t.category-menu .category-menu-nav .subcategory .subcategory-link {
\t\t\t\t\t\t\tpadding: 3px 5px;
\t\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t\t}
\t\t\t\t\t</style>
\t\t\t\t\t<div class=\"category-menu\">
\t\t\t\t\t\t";
        // line 521
        echo ($context["menu"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"statuses-widget\">
\t\t\t\t\t\t<span class=\"statuses-widget-title\">Наши статусы</span>
\t\t\t\t\t\t<div class=\"statuses-widget-item\">
\t\t\t\t\t\t\t<a href=\"/uploads/settings/16673753264b446664d827.jpg\" target=\"_blank\" aria-label=\"Показать наш статус\">
\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\" class=\"lazyload\" data-src=\"/thumbs/resize/78x110/uploads/settings/16673753264b446664d827.jpg\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</aside>
\t\t\t\t<main class=\"main\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"banners-group\">
\t\t\t\t\t\t\t<div class=\"banners-group__inner\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</main>
\t\t\t</div>
\t\t</div>";
    }

    public function getTemplateName()
    {
        return "kg/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  550 => 521,  288 => 262,  105 => 81,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kg/template/common/header.twig", "");
    }
}
