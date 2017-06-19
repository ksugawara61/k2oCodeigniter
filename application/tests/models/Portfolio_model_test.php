<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio_model_test extends TestCase {

    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('portfolio_model');
    }

    public function test_fetch_all_portfolios()
    {
        $portfolios = $this->CI->portfolio_model->fetch_all_portfolios();
        $this->assertInternalType('array', $portfolios);

        foreach ($portfolios as $portfolio)
        {
            $this->assertArrayHasKey('portfolio_id',        $portfolio);
            $this->assertArrayHasKey('page_title',          $portfolio);
            $this->assertArrayHasKey('page_description',    $portfolio);
            $this->assertArrayHasKey('page_abstract',       $portfolio);
            $this->assertArrayHasKey('page_thumbnail',      $portfolio);
            $this->assertArrayHasKey('page_subtitle',       $portfolio);
            $this->assertArrayHasKey('page_content',        $portfolio);
            $this->assertArrayHasKey('filming_title',       $portfolio);
            $this->assertArrayHasKey('filming_address',     $portfolio);
            $this->assertArrayHasKey('filming_description', $portfolio);
            $this->assertArrayHasKey('filming_location',    $portfolio);
        }
    }

    public function test_fetch_portfolio()
    {
        $expected = array('portfolio_id'  => '1',
                     'page_title' => 'Cafe Debut',
                     'page_description' => 'baserCMSのカフェサイト用テーマ「Cafe Debut（カフェ・デビュー）」の紹介ページです。Cafe Debutは、Instagramと連携して撮影した写真がすぐにサイトのトップページに反映されるおしゃれでかわいいフォトログ風テーマです。',
                     'page_abstract' => 'baser CMS カフェサイト用テーマ<br>baser CMS テーマコンテスト2012 飲食店系テーマ賞受賞（受賞結果はこちら）',
                     'page_thumbnail' => 'img_01_01.jpg',
                     'page_subtitle'  => 'いますぐ、はじめられるカフェサイトテーマ！',
                     'page_content'   => '<p>baserCMSは、「コーポレートサイトにちょうどいい」をキャッチコピーにしたcake PHPベースの国産CMS。Cafe Debutは、baseCMSのテーマコンテスト2012に応募するために、チームこもりこましゃで作成しました。</p>
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
                     'filming_title' => 'kitchen nest',
                     'filming_address' => '北海道札幌市中央区南3条西8丁目 大洋ビル2階',
                     'filming_description' => 'Cafe Debutテーマのイメージ撮影にご協力いただきました。とっても素敵なお店です。',
                     'filming_location' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2915.2940680937645!2d141.34411921547849!3d43.05628237914626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b29855389a3fb%3A0x3da6135facda1b0e!2z44CSMDYwLTAwNjMg5YyX5rW36YGT5pyt5bmM5biC5Lit5aSu5Yy65Y2X77yT5p2h6KW_77yY5LiB55uu77yX!5e0!3m2!1sja!2sjp!4v1496837307767" width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>');

        $portfolio = $this->CI->portfolio_model->fetch_portfolio('1');

        $this->assertEquals($expected, $portfolio);

    }

    public function test_fetch_portfolio_sections()
    {
        $expected = array(
            array(
                'section_id'          => '1',
                'section_title'       => 'プラグインでInstagramと連携',
                'section_description' => 'プラグインでInstagramと連携して、トップページにInstagramで撮影した写真がすぐに反映されます。',
                'section_image'       => 'img_01_02.jpg'
            ),
            array(
                'section_id'          => '2',
                'section_title'       => 'レスポンシブデザインでスマートフォン、タブレット表示も快適',
                'section_description' => 'さまざまなデバイスの表示対応に、レスポンシブデザインを採用しました。Instagramでお店のメニューを撮影してすぐにスマートフォンで確認できるのも嬉しい♪',
                'section_image'       => 'img_01_03.jpg'
            ),
            array(
                'section_id'          => '3',
                'section_title'       => 'Webフォントだから、飾り文字やアイコンもキレイ',
                'section_description' => 'サイトのタイトルやナビゲーション、主要な見出しはGoogle Web Font、アイコンはウェブフォント（Fontello）を採用しています。拡大縮小されるスマートフォンやタブレットでも解像度を気にすることなくキレイな文字とアイコン表示を実現できました。',
                'section_image'       => 'img_01_04.jpg'
            )
        );

        $sections = $this->CI->portfolio_model->fetch_portfolio_sections('1');

        $this->assertEquals($expected, $sections);
    }

    public function test_fetch_portfolio_links()
    {
        $expected = array(
            array(
                'link_id'   => '1',
                'link_name' => 'Cafe Debutのダウンロードページ',
                'link_url'  => 'https://basercms.net/themes/archives/14'
            ),
            array(
                'link_id'   => '2',
                'link_name' => 'Cafe Debutのデモページ',
                'link_url'  => 'https://cafedebut.cat-speak.net/'
            ),
            array(
                'link_id'   => '3',
                'link_name' => 'baser CMS公式サイト',
                'link_url'  => 'https://basercms.net/'
            ),
            array(
                'link_id'   => '4',
                'link_name' => 'Instagram公式サイト',
                'link_url'  => 'https://instagram.com/'
            )
        );

        $links = $this->CI->portfolio_model->fetch_portfolio_links('1');

        $this->assertEquals($expected, $links);
    }

    public function test_fetch_filming_lins()
    {
        $expected = array(
            array(
                'link_id'   => '5',
                'link_name' => 'http://www.nest-kitchen.jp',
                'link_url'  => 'http://www.nest-kitchen.jp'
            ),
            array(
                'link_id'   => '6',
                'link_name' => 'Facebookページ',
                'link_url'  => 'https://www.facebook.com/KitchenNest'
            )
        );

        $links = $this->CI->portfolio_model->fetch_filming_links('1');

        $this->assertEquals($expected, $links);
    }

}
