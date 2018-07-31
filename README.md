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

namespace App\Http\Controllers; <br>

use Illuminate\Http\Request; <br>
use Cisco\Aliyunsms\Facades\Aliyunsms; <br>

class UsersController extends Controller <br>
{ <br>
    /** <br>
     * send sms to users <br>
     * @param $PhoneNumber user PhoneNumber <br>
     * @param $SignName copy from aliyun <br>
     * @param $TemplateCode copy from aliyun <br>
     * @param $TemplateParam [this param is an array] check from aliyun <br>
     * @return Content <br>
     */ <br>
    public function index($PhoneNumber, $SignName, $TemplateCode, $TemplateParam) <br>
    { <br>
        $send = Aliyunsms::sendSms(strval($PhoneNumber), $SignName,  $TemplateCode, $TemplateParam); <br>
        if ($send->Code == 'OK') { <br>
            //Success <br>
        } else { <br>
            //failed <br>
        } <br>
    } <br>
} <br>
