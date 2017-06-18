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

    public function fetchPortfolios($portfolio_id = '')
    {
        if ($portfolio_id)
        {
            $this->db->where('portfolio_id', $portfolio_id);
        }

        $query = $this->db->get('portfolio');
        $portfolios = $query->result_array();

        return $portfolios;
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

}
