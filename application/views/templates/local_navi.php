<nav class="localNavi">
    <ul>
<?php foreach ($portfolios as $portfolio) { ?>
        <li><a href="<?php echo $portfolio_link.'/'.$portfolio['portfolio_id']; ?>"><?php echo $portfolio['page_title']; ?></a></li>
<?php } ?>
    </ul>
</nav>
