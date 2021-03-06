-- Cafe Debut
insert into k2o_blog.portfolio (page_title, page_description, page_abstract, page_thumbnail, page_subtitle, page_content, filming_title, filming_address, filming_description, filming_location) values (
  'Cafe Debut',
  'baserCMSのカフェサイト用テーマ「Cafe Debut（カフェ・デビュー）」の紹介ページです。Cafe Debutは、Instagramと連携して撮影した写真がすぐにサイトのトップページに反映されるおしゃれでかわいいフォトログ風テーマです。',
  'baser CMS カフェサイト用テーマ<br>baser CMS テーマコンテスト2012 飲食店系テーマ賞受賞（受賞結果はこちら）',
  'img_01_01.jpg',
  'いますぐ、はじめられるカフェサイトテーマ！',
  '<p>baserCMSは、「コーポレートサイトにちょうどいい」をキャッチコピーにしたcake PHPベースの国産CMS。Cafe Debutは、baseCMSのテーマコンテスト2012に応募するために、チームこもりこましゃで作成しました。</p>
                <p>baserCMSのインストールと、Cafe Debutテーマの初期設定を行ったら、あとはあなたのスマートフォンのInstagramで写真を撮っていくだけ。</p>
                <p>Instagramのおしゃれ写真で、すぐに素敵なカフェサイトが出来上がっちゃうフォトログ風baserCMSテーマです。</p>

                <table>
                    <caption>制作担当</caption>

                    <tr>
                        <th>コモモ</th>
                        <td>企画・デザイン・baserCMSテーマのベース組込み担当</td>
                    </tr>

                    <tr>
                        <th>モリコ</th>
                        <td>HTML/CSSコーディング担当</td>
                    </tr>

                    <tr>
                        <th>ひろましゃ</th>
                        <td>プラグイン制作、テーマ実装の難しいところとか担当</td>
                    </tr>

                </table>',
  'kitchen nest',
  '北海道札幌市中央区南3条西8丁目 大洋ビル2階',
  'Cafe Debutテーマのイメージ撮影にご協力いただきました。とっても素敵なお店です。',
  '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2915.2940680937645!2d141.34411921547849!3d43.05628237914626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b29855389a3fb%3A0x3da6135facda1b0e!2z44CSMDYwLTAwNjMg5YyX5rW36YGT5pyt5bmM5biC5Lit5aSu5Yy65Y2X77yT5p2h6KW_77yY5LiB55uu77yX!5e0!3m2!1sja!2sjp!4v1496837307767" width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>');

insert into k2o_blog.section (section_title, section_description, section_image) values (
  'プラグインでInstagramと連携',
  'プラグインでInstagramと連携して、トップページにInstagramで撮影した写真がすぐに反映されます。',
  'img_01_02.jpg');
insert into k2o_blog.section (section_title, section_description, section_image) values (
  'レスポンシブデザインでスマートフォン、タブレット表示も快適',
  'さまざまなデバイスの表示対応に、レスポンシブデザインを採用しました。Instagramでお店のメニューを撮影してすぐにスマートフォンで確認できるのも嬉しい♪',
  'img_01_03.jpg');
insert into k2o_blog.section (section_title, section_description, section_image) values (
  'Webフォントだから、飾り文字やアイコンもキレイ',
  'サイトのタイトルやナビゲーション、主要な見出しはGoogle Web Font、アイコンはウェブフォント（Fontello）を採用しています。拡大縮小されるスマートフォンやタブレットでも解像度を気にすることなくキレイな文字とアイコン表示を実現できました。',
  'img_01_04.jpg');

insert into k2o_blog.section_map values (1, 1);
insert into k2o_blog.section_map values (1, 2);
insert into k2o_blog.section_map values (1, 3);

insert into k2o_blog.link (link_name, link_url) values ('Cafe Debutのダウンロードページ', 'https://basercms.net/themes/archives/14');
insert into k2o_blog.link (link_name, link_url) values ('Cafe Debutのデモページ', 'https://cafedebut.cat-speak.net/');
insert into k2o_blog.link (link_name, link_url) values ('baser CMS公式サイト', 'https://basercms.net/');
insert into k2o_blog.link (link_name, link_url) values ('Instagram公式サイト', 'https://instagram.com/');
insert into k2o_blog.link (link_name, link_url) values ('http://www.nest-kitchen.jp', 'http://www.nest-kitchen.jp');
insert into k2o_blog.link (link_name, link_url) values ('Facebookページ', 'https://www.facebook.com/KitchenNest');

insert into k2o_blog.link_map values (1, 1);
insert into k2o_blog.link_map values (1, 2);
insert into k2o_blog.link_map values (1, 3);
insert into k2o_blog.link_map values (1, 4);

insert into k2o_blog.filming_map values (1, 5);
insert into k2o_blog.filming_map values (1, 6);

-- WordPressデザインワークブック
insert into k2o_blog.link (link_name, link_url) values ('Amazon（WordPressデザインワークブック3.4対応）', 'https://www.amazon.co.jp/dp/4881669281');
insert into k2o_blog.link (link_name, link_url) values ('WordPressデザインワークブック3.4対応サポートページ', 'http://www.sotechsha.co.jp/sp/928/');
insert into k2o_blog.link (link_name, link_url) values ('ソーテック社', 'http://www.sotechsha.co.jp/');
insert into k2o_blog.link (link_name, link_url) values ('コモモのまえがき：「WordPress デザインワークブック 3.4対応」を執筆しました！', 'http://cat-speak.net/2012/07/05/482/');
insert into k2o_blog.link (link_name, link_url) values ('ひろましゃのあとがき：「WordPress デザインワークブック 3.4対応」を執筆しました！', 'http://another.maple4ever.net/archives/1697/');

-- バッタになりたい魔法使い
insert into k2o_blog.link (link_name, link_url) values ('バッタになりたい魔法使い', 'http://pararaehon.com/');
insert into k2o_blog.link (link_name, link_url) values ('ひろましゃの記事：canvas と Web 仕掛け絵本', 'http://another.maple4ever.net/archives/1805/');

