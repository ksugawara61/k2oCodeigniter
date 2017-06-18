<div id="pageBody">

<?php foreach ($portfolios as $portfolio) { ?>

    <div id="pageBodyMain">
        <article class="articleDetail">

            <header class="articleDetailHead">
                <h1 class="pageTitle"><?php echo $portfolio['page_title']; ?></h1>
                <img src="/assets/images/portfolio/<?php echo $portfolio['page_thumbnail']; ?>" alt="" width="720" height="390">
                <p><?php echo $portfolio['page_abstract']; ?></p>
            </header>

            <section class="articleDetailBody">
                <h2 class="heading-typeA"><?php echo $portfolio['page_subtitle']; ?></h2>
<?php echo $portfolio['page_content']; ?>

<?php foreach ($sections as $section) { ?>
                <section>
                    <h3 class="heading-typeB"><?php echo $section['section_title']; ?></h3>
                    <p><?php echo $section['section_description']; ?></p>
                    <figure>
                        <img src="/assets/images/portfolio/<?php echo $section['section_image']; ?>" alt="" width="720" height="390">
                        <figcaption></figcaption>
                    </figure>
                </section>
<?php } ?>

            <footer class="articleDetailFoot">
                <section>
                    <h2 class="heading-typeC">関連リンク</h2>
                    <ul>
                        <li><a href="https://basercms.net/themes/archives/14">Cafe Debutのダウンロードページ</a></li>
                        <li><a href="https://cafedebut.cat-speak.net/">Cafe Debutのデモページ</a></li>
                        <li><a href="https://basercms.net/">baser CMS公式サイト</a></li>
                        <li><a href="https://instagram.com/">Instagram公式サイト</a></li>
                    </ul>
                </section>

                <aside class="creditUnit">
                    <div class="creditUnitText">
                        <p>撮影協力</p>
                        <h2 class="heading-typeC">kitchen nest</h2>
                        <p>北海道札幌市中央区南3条西8丁目 大洋ビル2階</p>
                        <ul>
                            <li><a href="http://www.nest-kitchen.jp">http://www.nest-kitchen.jp</a></li>
                            <li><a href="https://www.facebook.com/KitchenNest">Facebookページ</a></li>
                        </ul>
                        <p>Cafe Debutテーマのイメージ撮影にご協力いただきました。とっても素敵なお店です。</p>
                    </div>
                    <div class="creditUnitMap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2915.2940680937645!2d141.34411921547849!3d43.05628237914626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b29855389a3fb%3A0x3da6135facda1b0e!2z44CSMDYwLTAwNjMg5YyX5rW36YGT5pyt5bmM5biC5Lit5aSu5Yy65Y2X77yT5p2h6KW_77yY5LiB55uu77yX!5e0!3m2!1sja!2sjp!4v1496837307767" width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </aside>
            </footer>

        </article>
    </div>

    <div id="pageBodySub">
<?php echo $local_navi; ?>
<?php echo $news_list; ?>
    </div>

<?php } ?>

</div>

