# aliyun-sms
laravel-aliyun-sms

Installation【安装教程】：

1：composer require cisco/laravel-aliyunsms dev-master

2: add in config/app.php [在config/app.php添加]：<br>
  	  providers： Cisco\Aliyunsms\AliyunsmsServiceProvider::class
 	    aliases：  'Aliyunsms' => Cisco\Alinyunsms\Facades\Aliyunsms::class
  
3：composer dump-autoload

4：php artisan vendor:publish --provider="Cisco\Aliyunsms\AliyunsmsServiceProvider"
