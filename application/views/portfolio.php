<div id="pageBody">

    <div id="pageBodyMain">
        <section>
            <h1 class="pageTitle">つくったもの</h1>

<?php foreach ($portfolios as $portfolio) { ?>
            <article class="articleList">
                <a href="<?php echo $portfolio_link.'/'.$portfolio['portfolio_id']; ?>">
                    <div class="articleListText">
                        <h1><?php echo $portfolio['page_title']; ?></h1>
                        <p><?php echo $portfolio['page_abstract']; ?></p>
                    </div>
                    <div class="articleListImage">
                        <img src="/assets/images/portfolio/<?php echo $portfolio['page_thumbnail']; ?>" width="300" height="163" alt="">
                    </div>
                </a>
            </article>
<?php } ?>

        </section>
    </div>

    <div id="pageBodySub">
<?php echo $local_navi; ?>
<?php echo $news_list; ?>
    </div>

</div>
