<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("OutSider | 404");
$APPLICATION->SetPageProperty('footerClass', 'is-fixed');
?>
?>

<!-- 404 -->
        <main class="main page404 flex flex-middle" role="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <header class="header404">
                            <span class="number404">404</span>
                            <h3>Something went wrong</h3>
                            <ul class="list-unstyled">
                                <li>Something technical went wrong on our site.</li>
                                <li>We have removed the page.</li>
                                <li>Or the link you clicked might be old.</li>
                                <li>Or you might have typed the wrong URL.</li>
                            </ul>
                            <br />
                            <a href="/index.php" class="btn btn-link" role="button">Return to home page</a>
                        </header>
                    </div>
                </div>
            </div>
        </main>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>
