<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Html_helper_test extends TestCase {

    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->helper('html');
    }

    public function test_make_breadcrumb()
    {
        $title     = 'わたしたちについて';
        $hierarchy = array('ホーム' => '/', $title => NULL);
        $result = make_breadcrumb($hierarchy);

        
        $this->assertEquals('<p class="topicPath"><a href="/">ホーム</a> &gt; わたしたちについて</p>',
                           $result);
    }

}
