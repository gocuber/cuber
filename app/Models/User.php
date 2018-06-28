<?php

/**
 * User
 *
 * 用户表
 */
namespace models;

class User extends \Model
{

    protected $_key = 'default';

    protected $_name = 'uc_user';

    protected $_primarykey = 'id';

    protected $_fields = [
        'id',            // 用户id
        'username',      // 账号
        'password',      // 密码
        'status',        // 状态
        'mobile',        // 手机
        'email',         // email
        'name',          // 姓名
        'createtime',    // 创建时间
        'updatetime',    // 更新时间
    ];

}
