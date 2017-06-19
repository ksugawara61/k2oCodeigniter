<div id="pageBody">

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
<?php foreach ($links as $link) { ?>
                        <li><a href="<?php echo $link['link_url']; ?>"><?php echo $link['link_name']; ?></a></li>
<?php } ?>
                    </ul>
                </section>

<?php if ($portfolio['filming_title']) { ?>
                <aside class="creditUnit">
                    <div class="creditUnitText">
                        <p>撮影協力</p>
                        <h2 class="heading-typeC"><?php echo $portfolio['filming_title']; ?></h2>
                        <p><?php echo $portfolio['filming_address'] ?></p>
                        <ul>
<?php foreach ($filming_links as $link) { ?>
                        <li><a href="<?php echo $link['link_url']; ?>"><?php echo $link['link_name']; ?></a></li>
<?php } ?>
                        </ul>
                        <p><?php echo $portfolio['filming_description']; ?></p>
                    </div>
<?php if ($portfolio['filming_location']) { ?>
                    <div class="creditUnitMap">
                        <?php echo $portfolio['filming_location']; ?>
                    </div>
<?php } ?>
                </aside>
<?php } ?>
            </footer>

        </article>
    </div>

    <div id="pageBodySub">
<?php echo $local_navi; ?>
<?php echo $news_list; ?>
    </div>

</div>

