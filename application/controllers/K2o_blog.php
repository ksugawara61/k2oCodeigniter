<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class K2o_blog extends CI_Controller {

    private $index_link;  // トップページへのリンク

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('html');
        $this->index_link = '/'.index_page().'/'.$this->router->fetch_class();
    }

    /**
     * トップページ
     */
    public function index()
    {
        // ヘッダーに表示する動的な要素
        $header_data['title']       = '';
        $header_data['description'] = 'komorikomashaは、コモモ・モリコ・ひろましゃ3人のメンバーが勢いでつくったものや活動を紹介しているサイトです。';
        $header_data['index_link']  = $this->index_link;
        $header_data['method']      = $this->router->fetch_method();

        $this->load->view('templates/header', $header_data);
        $this->load->view('index');
        $this->load->view('templates/footer');
    }

    /**
     * わたしたちについて
     */
    public function about()
    {
        $title     = 'わたしたちについて';
        $hierarchy = array('ホーム' => $this->index_link, $title => NULL);

        // ヘッダーに表示する動的な要素
        $header_data['title']       = $title.' | ';
        $header_data['description'] = 'komorikomasyaの作品づくりのコンセプトを紹介するページです。';
        $header_data['index_link']  = $this->index_link;
        $header_data['method']      = $this->router->fetch_method();
        $header_data['breadcrumb']  = make_breadcrumb($hierarchy);

        $contents_data['news_list']  = $this->load->view('templates/news_list', NULL, TRUE);

        $this->load->view('templates/header', $header_data);
        $this->load->view('about', $contents_data);
        $this->load->view('templates/footer');
    }

    /**
     * つくったもの
     */
    public function portfolio($portfolio_id = '')
    {
        $this->load->model('portfolio_model');
        $title     = 'つくったもの';

        // ヘッダーに表示する動的な要素
        $header_data['index_link']  = $this->index_link;
        $header_data['method']      = $this->router->fetch_method();

        // Bodyに表示する動的な要素
        $contents_data['portfolio_link'] = $this->index_link.'/'.$this->router->fetch_method();
        $contents_data['portfolios'] = $this->portfolio_model->fetch_all_portfolios();
        $contents_data['local_navi'] = $this->load->view('templates/local_navi', $contents_data, TRUE);
        $contents_data['news_list']  = $this->load->view('templates/news_list', NULL, TRUE);

        if ($portfolio_id)
        {
            // つくったもの詳細ページの処理
            $portfolio = $this->portfolio_model->fetch_portfolio($portfolio_id);
            if (is_NULL($portfolio)) {
                // IDに対応するポートフォリオがない場合404ページを表示
                show_404();
            }
            $hierarchy = array('ホーム'                 => $this->index_link,
                               $title                   => $this->index_link.'/portfolio',
                               $portfolio['page_title'] => NULL);

            // つくったもの詳細ページのヘッダーに表示する動的な要素
            $header_data['description'] = $portfolio['page_description'];
            $header_data['title']       = $portfolio['page_title'].' | '.$title.' | ';
            $header_data['breadcrumb']  = make_breadcrumb($hierarchy);

            // つくったもの詳細ページのBodyに表示する動的な要素
            $contents_data['portfolio'] = $portfolio;
            $contents_data['sections']  = $this->portfolio_model->fetch_portfolio_sections($portfolio_id);
            $contents_data['links']     = $this->portfolio_model->fetch_portfolio_links($portfolio_id);
            if ($portfolio['filming_title']) {
                $contents_data['filming_links'] = $this->portfolio_model->fetch_filming_links($portfolio_id);
            }

            $this->load->view('templates/header', $header_data);
            $this->load->view('portfolio/detail', $contents_data);
            $this->load->view('templates/footer');
        }
        else
        {
            // つくったもの一覧ページの処理
            $hierarchy = array('ホーム' => $this->index_link, $title => NULL);

            // つくったもの一覧ページのヘッダーに表示する動的な要素
            $header_data['title']       = $title.' | ';
            $header_data['description'] = 'komorikomasha（コモモ・モリコ・ひろましゃ）が制作した作品を紹介するポートフォリオの一覧ページです。';
            $header_data['breadcrumb']  = make_breadcrumb($hierarchy);

            $this->load->view('templates/header', $header_data);
            $this->load->view('portfolio', $contents_data);
            $this->load->view('templates/footer');
        }
    }

    /**
     * おといあわせ
     */
    public function contact()
    {
        $title     = 'おといあわせ';
        $hierarchy = array('ホーム' => $this->index_link, $title => NULL);

        // ヘッダーに表示する動的な要素
        $header_data['title']       = $title.' | ';
        $header_data['description'] = '';
        $header_data['index_link']  = $this->index_link;
        $header_data['method']      = $this->router->fetch_method();
        $header_data['breadcrumb']  = make_breadcrumb($hierarchy);

        $contents_data['news_list']  = $this->load->view('templates/news_list', NULL, TRUE);

        $this->load->view('templates/header', $header_data);
        $this->load->view('contact', $contents_data);
        $this->load->view('templates/footer');

    }

}
