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
        $query = $this->db->get('portfolio');
        $portfolios = $query->result_array();

        return $portfolios;
    }

}
