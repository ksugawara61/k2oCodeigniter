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

                <section>
                    <h3 class="heading-typeB">プラグインでInstagramと連携</h3>
                    <p>プラグインでInstagramと連携して、トップページにInstagramで撮影した写真がすぐに反映されます。</p>
                    <figure>
                        <img src="images/img_01_02.jpg" alt="撮影した料理の写真もすぐにトップページで確認できます。" width="720" height="390">
                        <figcaption>今日のランチのローストビーフサンドを撮影♪</figcaption>
                    </figure>
                </section>

                <section>
                    <h3 class="heading-typeB">レスポンシブデザインでスマートフォン、タブレット表示も快適</h3>
                    <p>さまざまなデバイスの表示対応に、レスポンシブデザインを採用しました。Instagramでお店のメニューを撮影してすぐにスマートフォンで確認できるのも嬉しい♪</p>
                    <figure>
                        <img src="images/img_01_03.jpg" alt="スマートフォン・タブレット・パソコンで表示を確認すると、それぞれレイアウトが変わります。" width="720" height="390">
                        <figcaption>左からiPhone、iPad、MacBook Airで表示確認</figcaption>
                    </figure>
                </section>

                <section>
                    <h3 class="heading-typeB">Webフォントだから、飾り文字やアイコンもキレイ</h3>
                    <p>サイトのタイトルやナビゲーション、主要な見出しはGoogle Web Font、アイコンはウェブフォント（Fontello）を採用しています。拡大縮小されるスマートフォンやタブレットでも解像度を気にすることなくキレイな文字とアイコン表示を実現できました。</p>
                    <figure>
                        <img src="images/img_01_04.jpg" alt="スマートフォンの画像でも文字とアイコンの表示が劣化しません。" width="720" height="390">
                        <figcaption>iPhoneの画像に近づいても・・( ﾟдﾟ)ﾊｯ!キレイ</figcaption>
                    </figure>
                </section>

            </section>

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

