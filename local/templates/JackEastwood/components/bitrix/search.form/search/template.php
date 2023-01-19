<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>
    <a href="#search-popup" class="iconized open-popup-link" data-toggle="tooltip" data-placement="bottom" title="Search"><i class="icon icon-magnifier"></i></a>
    <!-- Popup Content -->
    <div id="search-popup" class="full-popup mfp-hide">
        <article class="search">
            <div class="container">
                <div class="row">
                    <h3 class="snserif">Search</h3>
                    <div class="input-group col-md-4 col-md-offset-4">
                        <input type="text" class="form-control" placeholder="Type and press enter to search">
                    </div>
                </div>
            </div>
        </article>
    </div>


