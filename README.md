# aliyun-sms
laravel-aliyun-sms

Installation【安装教程】：<br>

1：composer require cisco/laravel-aliyunsms dev-master <br>

2: add in config/app.php [在config/app.php添加]：<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; providers： Cisco\Aliyunsms\AliyunsmsServiceProvider::class <br>
 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; aliases：  'Aliyunsms' => Cisco\Alinyunsms\Facades\Aliyunsms::class <br>
  
3：composer dump-autoload <br>

4：php artisan vendor:publish --provider="Cisco\Aliyunsms\AliyunsmsServiceProvider" <br>

5: You can use it like this example:

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cisco\Aliyunsms\Facades\Aliyunsms;

class UsersController extends Controller
{
    /**
     * send sms to users
     * @param $PhoneNumber user PhoneNumber
     * @param $SignName copy from aliyun
     * @param $TemplateCode copy from aliyun
     * @param $TemplateParam [this param is an array] check from aliyun
     * @return Content
     */
    public function index($PhoneNumber, $SignName, $TemplateCode, $TemplateParam)
    {
        $send = Aliyunsms::sendSms(strval($PhoneNumber), $SignName,  $TemplateCode, $TemplateParam);
        if ($send->Code == 'OK') {
            //Success
        } else {
            //failed
        }
    }
}
