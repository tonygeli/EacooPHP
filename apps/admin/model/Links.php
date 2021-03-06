<?php
// 链接模型       
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 http://www.eacoo123.com, All rights reserved.         
// +----------------------------------------------------------------------
// | [EacooPHP] 并不是自由软件,可免费使用,未经许可不能去掉EacooPHP相关版权。
// | 禁止在EacooPHP整体或任何部分基础上发展任何派生、修改或第三方版本用于重新分发
// +----------------------------------------------------------------------
// | Author:  心云间、凝听 <981248356@qq.com>
// +----------------------------------------------------------------------
namespace app\admin\model;

use app\common\model\Base;

class Links extends Base {
    
    protected $insert = ['status'=>1];
    /**
     * 链接类型
     */
    public function link_type($id) {
        $list['1'] = '友情链接';
        $list['2'] = '合作伙伴';
        return $id ? $list[$id] : $list;
    }

}
