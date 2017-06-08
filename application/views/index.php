<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>komorikomasha（こもりこましゃ）</title>
<meta name="description" content="komorikomashaは、コモモ・モリコ・ひろましゃ3人のメンバーが勢いでつくったものや活動を紹介しているサイトです。">
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
            <li class="current"><a href="index.html">ホーム</a></li>
            <li><a href="about/index.html">わたしたちについて</a></li>
            <li><a href="portfolio/index.html">つくったもの</a></li>
            <li><a href="contact/index.html">おといあわせ</a></li>
        </ul>
    </nav>
</header>

<div id="pageBody">
    <section class="mainVisual">
        <ul  class="bxslider">
            <li>
                <div class="mainVisualText">
                    <h1>バッタになりたい魔法使い</h1>
                    <p>コモモ・ひろましゃ制作のWeb仕掛け絵本<br>合い言葉は、バッタになっちゃえ！</p>
                </div>
                <img src="images/mainVisual_img_03.jpg" width="980" height="500" alt="">
            </li>
            <li>
                <div class="mainVisualText">
                    <h1>WordPressデザインワークブック</h1>
                    <p>コモモとひろましゃ二人の共著によるWordPressで本格的なウェブサイトを制作したい方向けの書籍</p>
                </div>
                <img src="images/mainVisual_img_02.jpg" width="980" height="500" alt="">
            </li>
            <li>
                <div class="mainVisualText">
                    <h1>Cafe Debut</h1>
                    <p>baserCMS、カフェサイト用テーマ<br>
                        baserCMS2012 テーマコンテスト 飲食店系テーマ賞受賞</p>
                </div>
                <img src="images/mainVisual_img_01.jpg" width="980" height="500" alt="">
            </li>
        </ul>
    </section>

    <section class="portfolioIndex">
        <article>
            <a href="portfolio/03.html"><img src="portfolio/images/index_03.jpg" width="300" height="163" alt=""></a>
            <h2><a href="portfolio/03.html">バッタになりたい魔法使い</a></h2>
            <p>コモモ・ひろましゃ制作のWeb仕掛け絵本<br>合い言葉は、バッタになっちゃえ！</p>
        </article>

        <article>
            <a href="portfolio/02.html"><img src="portfolio/images/index_02.jpg" width="300" height="163" alt=""></a>
            <h2><a href="portfolio/02.html">WordPressデザインワークブック</a></h2>
            <p>コモモとひろましゃ二人の共著によるWordPressで本格的なウェブサイトを制作したい方向けの書籍</p>
        </article>

        <article>
            <a href="portfolio/01.html"><img src="portfolio/images/index_01.jpg" width="300" height="163" alt=""></a>
            <h2><a href="portfolio/01.html">Cafe Debut</a></h2>
            <p>baserCMSのカフェサイト用汎用テーマ<br>テーマコンテスト2012飲食店系テーマ賞受賞</p>
        </article>
    </section>

    <section class="news">
        <h1>おしらせ</h1>
        <table>
            <tr>
                <th><time datetime="2013-10-01">2013年10月1日</time></th>
                <td>コモモとモリコで、書籍「HTML/CSSの教科書（仮題）」を執筆中です。お楽しみに。</td>
            </tr>
            <tr>
                <th><time datetime="2013-10-01">2013年10月1日</time></th>
                <td>
                    コモモ・モリコ・ひろましゃ3人のサイト「komorikomasha」をオープンしました。<br>
                    3人で制作したウェブサイトやサービス、その他諸々の活動を紹介・お知らせしていく予定です。
                    どうぞよろしくお願いいたします。
                </td>
            </tr>
        </table>
    </section>

</div>

<p class="pagetop"><a href="#page">ページの先頭へ戻る</a></p>

<footer id="pageFoot">
    <p id="copyright"><small>Copyright&copy; 2013 @komorikomasha All Rights Reserved.</small></p>
</footer>
</div>

</body>
</html>