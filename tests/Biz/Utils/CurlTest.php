<?php
// +----------------------------------------------------------------------
// | CurlTest.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace Tests\Biz\Utils;

use App\Utils\Curl;
use \UnitTestCase;

/**
 * Class UnitTest
 */
class CurlTest extends UnitTestCase
{
    public function testGetCase()
    {
        $res = Curl::get('http://demo.phalcon.lmx0536.cn/test/api/api?test_get_case=1');
        $this->assertEquals(1, $res['data']['body']['test_get_case']);

        $res = Curl::get('http://demo.phalcon.lmx0536.cn/test/api/api', ['test_get_case' => 1]);
        $this->assertEquals(1, $res['data']['body']['test_get_case']);
    }

    public function testJsonCase()
    {
        $res = Curl::json('http://demo.phalcon.lmx0536.cn/test/api/api', ['test_json_case' => 1]);
        $this->assertEquals(1, $res['data']['json']['test_json_case']);
    }
}