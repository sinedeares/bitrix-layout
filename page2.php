<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>

        <!-- Content -->
        <main class="main" role="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Filter -->
                        <?$APPLICATION->IncludeComponent(
                            'rustam:filter', ''
                        );?>
                    </div>
                </div>
                <!-- Masonry -->
                <section class="masonry">
                    <div class="grid-sizer"></div>
                    <div class="gutter-sizer"></div>

                    <div class="item adventure" data-category="adventure">
                        <article class="post">
                            <figure class="figure square">
                                <div class="img-trigger">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/placeholder.jpg" alt="img" />
                                </div>
                                <a href="/postcentered/index.php" class="overlay-link"></a>
                            </figure>
                            <section class="post-content">
                                <h4 class="post-title"><a href="/postcentered/index.php">Road to perdition</a></h4>
                                <h6 class="category">Adventure</h6>
                                <p>Competently extend distributed web through interdependent...</p>
                                <span class="meta comments">6 Comments</span>
                            </section>
                        </article>
                    </div>

                    <div class="item photography" data-category="photography">
                        <article class="post">
                            <figure class="figure rectangle-big">
                                <div class="img-trigger">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/placeholder.jpg" alt="img" />
                                </div>
                                <a href="/postcentered/index.php" class="overlay-link"></a>
                            </figure>
                            <section class="post-content">
                                <h4 class="post-title"><a href="/postcentered/index.php">Motivation for today</a></h4>
                                <h6 class="category">Photography</h6>
                                <p>Competently extend distributed web through interdependent...</p>
                                <span class="meta comments">6 Comments</span>
                            </section>
                        </article>
                    </div>
                    <div class="item design" data-category="design">
                        <article class="post">
                            <figure class="figure rectangle">
                                <div class="img-trigger">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/placeholder.jpg" alt="img" />
                                </div>
                                <a href="/postcentered/index.php" class="overlay-link"></a>
                            </figure>
                            <section class="post-content">
                                <h4 class="post-title"><a href="/postcentered/index.php">Pool for everyone</a></h4>
                                <h6 class="category">Design</h6>
                                <p>Competently extend distributed web through interdependent...</p>
                                <span class="meta comments">6 Comments</span>
                            </section>
                        </article>
                    </div>

                    <div class="item design" data-category="design">
                        <article class="post">
                            <figure class="figure square">
                                <div class="img-trigger">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/placeholder.jpg" alt="img" />
                                </div>
                                <a href="/postcentered/index.php" class="overlay-link"></a>
                            </figure>
                            <section class="post-content">
                                <h4 class="post-title"><a href="/postcentered/index.php">Outlet things</a></h4>
                                <h6 class="category">Design</h6>
                                <p>Competently extend distributed web through interdependent...</p>
                                <span class="meta comments">6 Comments</span>
                            </section>
                        </article>
                    </div>

                    <div class="item adventure" data-category="adventure">
                        <article class="post">
                            <figure class="figure rectangle">
                                <div class="img-trigger">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/placeholder.jpg" alt="img" />
                                </div>
                                <a href="/postcentered/index.php" class="overlay-link"></a>
                            </figure>
                            <section class="post-content">
                                <h4 class="post-title"><a href="/postcentered/index.php">What do you say?</a></h4>
                                <h6 class="category">Adventure</h6>
                                <p>Competently extend distributed web through interdependent...</p>
                                <span class="meta comments">6 Comments</span>
                            </section>
                        </article>
                    </div>
                    <div class="item photography" data-category="photography">
                        <article class="post">
                            <figure class="figure square">
                                <div class="img-trigger">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/placeholder.jpg" alt="img" />
                                </div>
                                <a href="/postcentered/index.php" class="overlay-link"></a>
                            </figure>
                            <section class="post-content">
                                <h4 class="post-title"><a href="/postcentered/index.php">Fastest classic</a></h4>
                                <h6 class="category">Photography</h6>
                                <p>Competently extend distributed web through interdependent...</p>
                                <span class="meta comments">6 Comments</span>
                            </section>
                        </article>
                    </div>

                    <div class="item inspiration" data-category="inspiration">
                        <article class="post">
                            <section class="post-content">
                                <h4 class="post-title"><a href="/postcentered/index.php">A few words</a></h4>
                                <h6 class="category">Inspiration</h6>
                                <p class="text-left">The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers...</p>
                                <a href="/postcentered/index.php" class="read-more">Read More</a>
                                <span class="meta comments">6 Comments</span>
                            </section>
                        </article>
                    </div>
                    <div class="item adventure" data-category="adventure">
                        <article class="post">
                            <figure class="figure rectangle">
                                <div class="img-trigger">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/placeholder.jpg" alt="img" />
                                </div>
                                <a href="/postcentered/index.php" class="overlay-link"></a>
                            </figure>
                            <section class="post-content">
                                <h4 class="post-title"><a href="/postcentered/index.php">I'm new here</a></h4>
                                <h6 class="category">Adventure</h6>
                                <p>Competently extend distributed web through interdependent...</p>
                                <span class="meta comments">6 Comments</span>
                            </section>
                        </article>
                    </div>

                    <div class="item photography" data-category="photography">
                        <article class="post">
                            <figure class="figure rectangle-big">
                                <div class="img-trigger">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/placeholder.jpg" alt="img" />
                                </div>
                                <a href="/postcentered/index.php" class="overlay-link"></a>
                            </figure>
                            <section class="post-content">
                                <h4 class="post-title"><a href="/postcentered/index.php">Distance and depth</a></h4>
                                <h6 class="category">Photography</h6>
                                <p>Competently extend distributed web through interdependent...</p>
                                <span class="meta comments">6 Comments</span>
                            </section>
                        </article>
                    </div>

                    <div class="item adventure" data-category="adventure">
                        <article class="post">
                            <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/103482613?color=ffffff&title=0&byline=0&portrait=0"></iframe>
</div>
                            <section class="post-content">
                                <h4 class="post-title"><a href="/postcentered/index.php">Progressive agency</a></h4>
                                <h6 class="category">Adventure</h6>
                                <p>Competently extend distributed web through interdependent...</p>
                                <span class="meta comments">6 Comments</span>
                            </section>
                        </article>
                    </div>

                    <div class="item inspiration" data-category="inspiration">
                        <article class="post">
                            <section class="post-content">
                                <h4 class="post-title"><a href="/postcentered/index.php">Technical matters</a></h4>
                                <h6 class="category">Inspiration</h6>
                                <p class="text-left">Uniquely aggregate client-centric scenarios vis-a-vis interactive products. Synergistically re-engineer resource sucking synergy via market positioning leadership skills. Enthusiastically procrastinate extensive testing procedures before leading-edge niche markets. Interactively restore impactful schemas before B2B web services. Distinctively iterate leading-edge niche markets vis-a-vis out-of-the-box customer service....</p>
                                <a href="/postcentered/index.php" class="read-more">Read More</a>
                                <span class="meta comments">6 Comments</span>
                            </section>
                        </article>
                    </div>

                    <div class="item design" data-category="design">
                        <article class="post">
                            <figure class="figure square">
                                <div class="img-trigger">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/placeholder.jpg" alt="img" />
                                </div>
                                <a href="/postcentered/index.php" class="overlay-link"></a>
                            </figure>
                            <section class="post-content">
                                <h4 class="post-title"><a href="/postcentered/index.php">Extreme ways</a></h4>
                                <h6 class="category">Design</h6>
                                <p>Competently extend distributed web through interdependent...</p>
                                <span class="meta comments">6 Comments</span>
                            </section>
                        </article>
                    </div>
                    <div class="item inspiration" data-category="inspiration">
                        <article class="post">
                            <section class="post-content">
                                <blockquote class="quote">
                                    Products have to be designed in a way that they are comprehensible.
                                    <cite>Dieter Rams</cite>
                                </blockquote>
                            </section>
                        </article>
                    </div>
                </section><!-- /.masonry -->

                <!-- Pagination -->
                <?$APPLICATION->IncludeComponent(
                    'rustam:pagination','',
                );?>
            </div>
        </main>


<?
   require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>


