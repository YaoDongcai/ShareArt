<?php
namespace Home\Controller;
use LeanCloud\LeanQuery;
use Think\Controller;
use LeanCloud\LeanClient;

class IndexController extends Controller {

    public function index(){
//// 参数依次为 appId, appKey, masterKey
//        LeanClient::initialize("MPPgPonVVgoN8d3YDQaJ7TWN-gzGzoHsz", "WHTzQQg2fLDectWzUhDMBk22", "iSJT46oOi1alPPvwXaa8Dky9");
//
//// 我们目前支持 CN 和 US 区域，默认使用 CN 区域，可以切换为 US 区域
//        LeanClient::useRegion("CN");
//
//        $query = new LeanQuery("test");
//        $test = $query->find();
//        foreach($test as $todo) {
//            var_dump($todo);
//        }
    	$this->display();
    }
}