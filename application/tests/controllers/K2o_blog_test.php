<?php

class K2o_blog_test extends TestCase {

    public function test_index()
    {
        $output = $this->request('GET', 'k2o_blog/index');
        $this->assertContains('<title>komorikomasha（こもりこましゃ）</title>', $output);
    }

}
