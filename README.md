# aliyun-sms
laravel-aliyun-sms

Installation【安装教程】：<br>

1：composer require cisco/laravel-aliyunsms dev-master <br>

2: add in config/app.php [在config/app.php添加]：<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; providers： Cisco\Aliyunsms\AliyunsmsServiceProvider::class <br>
 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; aliases：  'Aliyunsms' => Cisco\Alinyunsms\Facades\Aliyunsms::class <br>
  
3：composer dump-autoload <br>

4：php artisan vendor:publish --provider="Cisco\Aliyunsms\AliyunsmsServiceProvider" <br>
