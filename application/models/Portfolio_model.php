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

}
