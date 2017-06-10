<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title><?php echo $title; ?>komorikomasha（こもりこましゃ）</title>
<meta name="description" content="<?php echo $description; ?>">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Antic+Didone">
<link rel="stylesheet" href="/assets/css/normalize.css">
<link rel="stylesheet" href="/assets/css/style.css">

<script src="/assets/js/jquery-1.12.4.min.js"></script>
<script src="/assets/js/jquery.bxslider/jquery.bxslider.js"></script>
<link rel="stylesheet" href="/assets/js/jquery.bxslider/jquery.bxslider.css">
<script>
$(document).ready(function(){
    $('.bxslider').bxSlider({
        auto: true,
        speed: 1000,
        pause: 4000
    });
});
</script>
</head>
<body>

<div id="page">
<header id="pageHead">
    <h1 id="siteTitle">komorikomasha</h1>
    <p id="catchcopy">1人じゃできないことも、力を合わせればできる。やってみたいをカタチにする、3人の楽しいものづくり。</p>
    <nav class="globalNavi">
        <ul>
            <li<?php if ($method === 'index') { ?> class="current"<?php } ?>><a href="<?php echo $index_link; ?>">ホーム</a></li>
            <li<?php if ($method === 'about') { ?> class="current"<?php } ?>><a href="<?php echo $index_link; ?>/about">わたしたちについて</a></li>
            <li<?php if ($method === 'portfolio') { ?> class="current"<?php } ?>><a href="<?php echo $index_link; ?>/portfolio">つくったもの</a></li>
            <li<?php if ($method === 'contact') { ?> class="current"<?php } ?>><a href="<?php echo $index_link; ?>/contact">おといあわせ</a></li>
        </ul>
    </nav>
</header>

<?php if (isset($breadcrumb)) { echo $breadcrumb; } ?>

