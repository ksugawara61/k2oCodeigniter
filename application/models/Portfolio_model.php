<?php
class Portfolio_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function __destruct()
    {
        $this->db->close();
    }

    /**
     * ポートフォリオ一覧を取得する
     *
     * @return array ポートフォリオのリスト
     */
    public function fetchAllPortfolios()
    {
        $query = $this->db->get('portfolio');
        $portfolios = $query->result_array();

        return $portfolios;
    }

    /**
     * ポートフォリオを取得する
     *
     * @param string $portfolio_id ポートフォリオID
     * @return array IDに対応するポートフォリオ
     */
    public function fetchPortfolio($portfolio_id)
    {
        $query = $this->db->where('portfolio_id', $portfolio_id)->get('portfolio');
        $portfolio = $query->row_array();

        return $portfolio;
    }

    /**
     * ポートフォリオに紐づくセクションを取得する
     *
     * @param string $portfolio_id  ポートフォリオID
     * @return array セクションのリスト
     */
    public function fetchPortfolioSections($portfolio_id)
    {
        // ポートフォリオIDに紐づくセクションIDを取得
        $query = $this->db->select('section_id')
                      ->where('portfolio_id', $portfolio_id)
                      ->get('section_map');
        $tmp = $query->result_array();

        // or_where_inに利用するためセクションIDを配列に変換
        $section_ids = array();
        foreach ($tmp as $section_id)
        {
            array_push($section_ids, $section_id['section_id']);
        }

        // セクションの詳細を取得
        $query = $this->db->or_where_in('section_id', $section_ids)->get('section');
        $sections = $query->result_array();

        return $sections;
    }

    /**
     * ポートフォリオに紐づくリンクを取得する
     *
     * @param string $portfolio_id ポートフォリオID
     * @return array リンクのリスト
     */
    public function fetchPortfolioLinks($portfolio_id)
    {
        // ポートフォリオIDに紐づくリンクIDを取得
        $query = $this->db->select('link_id')
                      ->where('portfolio_id', $portfolio_id)
                      ->get('link_map');
        $tmp = $query->result_array();

        // or_where_inに利用するためリンクIDを配列に変換
        $link_ids = array();
        foreach ($tmp as $link_id)
        {
            array_push($link_ids, $link_id['link_id']);
        }

        // リンクの詳細を取得
        $query = $this->db->or_where_in('link_id', $link_ids)->get('link');
        $links = $query->result_array();

        return $links;
    }

}
