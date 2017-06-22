<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class K2o_blog_test extends TestCase {

    public function test_index()
    {
        $output = $this->request('GET', 'k2o_blog/index');
        $this->assertContains('<title>komorikomasha（こもりこましゃ）</title>', $output);
    }

    public function test_about()
    {
        $output = $this->request('GET', 'k2o_blog/about');
        $this->assertContains('<title>わたしたちについて | komorikomasha（こもりこましゃ）</title>', $output);
    }

    public function test_portfolio()
    {
        $output = $this->request('GET', 'k2o_blog/portfolio');
        $this->assertContains('<title>つくったもの | komorikomasha（こもりこましゃ）</title>', $output);
    }

    public function test_portfolio_detail()
    {
        $output = $this->request('GET', 'k2o_blog/portfolio/1');
        $this->assertContains('<title>Cafe Debut | つくったもの | komorikomasha（こもりこましゃ）</title>', $output);
    }

    public function test_portfolio_404()
    {
        $output = $this->request('GET', 'k2o_blog/portfolio/999');
		$this->assertResponseCode(404);
    }

    public function test_contact()
    {
        $output = $this->request('GET', 'k2o_blog/contact');
        $this->assertContains('<title>おといあわせ | komorikomasha（こもりこましゃ）</title>', $output);
    }

	public function test_method_404()
	{
		$this->request('GET', 'k2o_blog/method_not_exist');
		$this->assertResponseCode(404);
	}

	public function test_APPPATH()
	{
		$actual = realpath(APPPATH);
		$expected = realpath(__DIR__ . '/../..');
		$this->assertEquals(
			$expected,
			$actual,
			'Your APPPATH seems to be wrong. Check your $application_folder in tests/Bootstrap.php'
		);
	}


}
