<?

use Bitrix\Main\Page\Asset;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>

<!-- Scroll top -->
<a class="scroll-top icon icon-arrow-up"></a>

<!-- Footer -->
<footer class="footer <? $APPLICATION->ShowProperty("footerClass"); ?>" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <p>&copy; 2015 OutSider Theme, All Rights Reserved, Made with <i class="fa fa-wrench"></i> by <a href="http://filiponline.tk/" target="_blank">Filip</a></p>
            </div>
            <div class="col-xs-12 col-md-6">
                <?
                $APPLICATION->IncludeComponent(
                    'rustam:socials',
                    '',
                    ['fa-facebook',
                        'fa-twitter',
                        'fa-pinterest',
                        'fa-flickr',
                        'fa-dribbble',
                        'fa-behance']
                )
                ?>
            </div>
        </div>
    </div>
</footer>

</body>
</html>