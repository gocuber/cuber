<?php

/**
 * User
 *
 * @author Cuber <dafei.net@gmail.com>
 */
namespace App\Models;

use Cuber\Database\Model;

class User extends Model
{

    protected $_name = 'uc_user';

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
