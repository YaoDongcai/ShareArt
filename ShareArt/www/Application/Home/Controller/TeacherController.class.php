<?php
namespace Home\Controller;
use Org\Util\Date;
use Think\Controller;
class TeacherController extends Controller {
    // 获取教师的信息放在首页
    public function index() {
    	$teacher = M('Teacher');
    	$data = $teacher->where()->select();


    	$this->assign('list',$data);
    	$this->display();
    }
    // 获取 查询动作 对传过来的参数来进行识别；

    public function info($id) {
        //  获取id
        $Count = M('Count');
        $data = array();
//        先要搜索这个id 是否存在,如果存在，执行的是查询和更新操作：
        $result = $Count->where('teacher_id='.$id)->select();
        //
        if(empty($result)) {
//            创建这个page_count;
            $data['teacher_id'] =(int) $id;
            $data['page_count'] = 0;
            $data['create_time'] = date('Y-m-d H:i:s');
            $result = $Count->create($data);
            $Count->add();
        }

        //   否则更新操作
        $data['page_count'] = $result[0]['page_count'] + 1;
        $Count->where('teacher_id='.$id)->save($data);

        //  对数据库查询动作，按照条件查询；

        $teacher = M('Teacher');
        $data = $teacher->where('id=%d',$id)->find();

        // 生成二维码；

        vendor("phpqrcode.phpqrcode");
        // 获取当前的URL请求；

        $dataUrl = $_SERVER["SERVER_NAME"].$_SERVER['REQUEST_URI'];
        $level = 'L';
        $size = 4;

        $path = "Public/images/teacher/";
        $fileName = $path.$data['id'].'.png';
         \QRcode::png($dataUrl,$fileName,$level,$size);
        $data['img_data'] = "/".$fileName;
//        查询Count的动作
        $result = $Count->where('teacher_id='.$id)->select();
        $data['page_count'] = $result[0]['page_count'];

        $this->assign('teacher',$data);
        $this->display('teacher-info');
    }

    // 获取客户的报名的课程；
    public function  upload() {
//        更新数据
        $User = M('');

        $data = array();
        $data = I('post.');
        $data['create_time'] = date('Y-m-d H:i:s');

        $User->create($data);
        $result =  $User->add();

        if($result) {
            $this->success('提交成功', 'index');
        } else{
            $this->success('发生错误了');
        }


//        写入一张表中
    }
}