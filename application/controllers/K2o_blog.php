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
        $hierarchy = array('ホーム' => $this->index_link, $title => null);

        // ヘッダーに表示する動的な要素
        $header_data['title']       = $title.' | ';
        $header_data['description'] = 'komorikomasyaの作品づくりのコンセプトを紹介するページです。';
        $header_data['index_link']  = $this->index_link;
        $header_data['method']      = $this->router->fetch_method();
        $header_data['breadcrumb']  = makeBreadcrumb($hierarchy);

        $contents_data['news_list']  = $this->load->view('templates/news_list', null, true);

        $this->load->view('templates/header', $header_data);
        $this->load->view('about', $contents_data);
        $this->load->view('templates/footer');
    }

    /**
     * つくったもの
     */
    public function portfolio($page_id = '')
    {
        $this->load->model('portfolio_model');
        $title     = 'つくったもの';
        $hierarchy = array('ホーム' => $this->index_link, $title => null);

        // ヘッダーに表示する動的な要素
        $header_data['title']       = $title.' | ';
        $header_data['description'] = 'komorikomasha（コモモ・モリコ・ひろましゃ）が制作した作品を紹介するポートフォリオの一覧ページです。';
        $header_data['index_link']  = $this->index_link;
        $header_data['method']      = $this->router->fetch_method();
        $header_data['breadcrumb']  = makeBreadcrumb($hierarchy);

        // Bodyに表示する動的な要素
        $contents_data['portfolio_link'] = $this->index_link.'/'.$this->router->fetch_method();
        $contents_data['portfolios'] = $this->portfolio_model->fetchPortfolios();
        $contents_data['local_navi'] = $this->load->view('templates/local_navi', $contents_data, true);
        $contents_data['news_list']  = $this->load->view('templates/news_list', null, true);

        $this->load->view('templates/header', $header_data);
        $this->load->view('portfolio', $contents_data);
        $this->load->view('templates/footer');
    }

    /**
     * おといあわせ
     */
    public function contact()
    {
        $title     = 'おといあわせ';
        $hierarchy = array('ホーム' => $this->index_link, $title => null);

        // ヘッダーに表示する動的な要素
        $header_data['title']       = $title.' | ';
        $header_data['description'] = '';
        $header_data['index_link']  = $this->index_link;
        $header_data['method']      = $this->router->fetch_method();
        $header_data['breadcrumb']  = makeBreadcrumb($hierarchy);

        $contents_data['news_list']  = $this->load->view('templates/news_list', null, true);

        $this->load->view('templates/header', $header_data);
        $this->load->view('contact', $contents_data);
        $this->load->view('templates/footer');

    }

}
