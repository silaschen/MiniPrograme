<?php

class TeacherSysAction extends CommonAction
{
    /**
     * 教师列表页
     */
    public function index()
    {

        $this->IsAdm(true);
        if (IS_GET) {
            $this->eq = '教师管理';
            $this->title = '教师列表';
            $p = I('p', 1);
            $map = array();//筛选条件
            $map['status'] = array('EGT', 0);
            $pageSize = 15;
            $model = M("teacher_list");
            //查找数据
            $list = $model->where($map)->order('addtime desc')->page($p . ',' . $pageSize)->select();
            //参数传递
            $this->assign('list', $list);
            $this->page($model, $map, $pageSize);
            $this->display();
        }
    }

    public function create()
    {
        $this->IsAdm(true);
        $model = M("teacher_list");
        if (IS_GET) {
            $this->eq = '教师管理';
            $this->title = '添加教师信息';
            $id = intval(I('id'));
            if ($id) {
                $this->eq = '修改教师信息';
                $teacher = $model->where(array('id' => $id))->find();
var_dump($teacher);
                if (!$teacher) json('教师信息不存在');
                $this->assign('info',$teacher);
            }
            $this->display();
        }else{
            $data = array();
            $data['name'] = I("name");
            $data['age'] = I("age");
            $data['sex'] = I("sex");
            $data['describe'] = I("describe");
            $data['photo'] = I("photo");
            $data['college'] = I("college");
            $data['experience_age'] = I("experience_age");
            $data['is_fulltime'] = I("is_fulltime");
            $data['updatetime'] = NOW_TIME;
            if($data['id']) {
                $teacher = $model->where(array('id'=>$data['id']))->find();
                if(!$teacher) json('教师信息不存在');
                $res = $teacher->save($data);
            }else{
                $data['addtime'] = NOW_TIME;
                $res = $model->add($data);
            }
            if(!$res) json('操作失败');
            json('操作成功',1);
        }
    }

}