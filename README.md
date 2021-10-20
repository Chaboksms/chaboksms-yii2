# Chaboksms Yii2


<div dir='rtl'>

### معرفی وب سرویس چابک اس ام اس
چابک اس ام اس یک وب سرویس کامل برای ارسال و دریافت پیامک و پیامک صوتی و مدیریت کامل خدمات دیگر است که براحتی میتوانید از آن استفاده کنید.

<hr>

### نصب

<p>قبل از نصب نیاز به ثبت نام در سایت چابک اس ام اس دارید.</p>

[**ثبت نام به همراه دریافت 200 پیامک هدیه جهت تست وبسرویس**](https://chaboksms.ir/)

<p>پس ازثبت نام  برای نصب از راههای زیر میتوانید اقدام کنید.</p>



</div>


```php
composer require chaboksms/yii2:1.0.5
```


<div dir='rtl'>

یا از طریق اضافه کردن خط زیر به فایل 
composer.json



</div>


```json
"chaboksms/yii2": "1.0.5"
```


<div dir='rtl'>


و سپس اجرای دستور 



</div>

    composer update


	
<div dir='rtl'>


### کانفیگ
	
به فایل کانفیگ کد زیر را اضافه کنید

</div>

```php
'Chaboksms' => [
            'class' => 'Chaboksms\Yii2\Chaboksms',
            'username' => 'Your username',
            'password' => 'Your password'
        ]

```

<div dir='rtl'>
	
#### نحوه استفاده
نمونه کد برای ارسال پیامک در Yii2



</div>



```php
try{
    $api = Yii::$app->Chaboksms->Api();
    $sms = $api->sms();
    $to = '09123456789';
    $from = '5000...';
    $text = 'تست وب سرویس چابک اس ام اس';
    $response = $sms->send($to,$from,$text);
    $json = json_decode($response);
    return $json->Value; //RecId or Error Number 
}catch(Exception $e){
    return $e->getMessage();
}
```


<div dir='rtl'>

از آنجا که وب سرویس چابک اس ام اس تنها محدود به ارسال پیامک نیست  شما از طریق  زیر میتوانید به وب سرویس ها دسترسی کامل داشته باشید:


</div>

```php
// وب سرویس پیامک
$smsRest = $api->sms();
$smsSoap = $api->sms('soap');
// وب سرویس تیکت پشتیبانی
$ticket = $api->ticket();
// وب سرویس برای مدیریت کامل  ارسال انبوه پیامک
$branch = $api->branch();
//وب سرویس کاربران
$users = $api->users();
//وب سرویس دفترچه تلفن
$contacts = $api->contacts()

```


<div dir='rtl'>


### دریافت لیست کامل متد ها

برای دریافت لیست کامل متد ها به آدرس زیر مراجعه کنید


[Chaboksms/chaboksms-php](https://github.com/Chaboksms/chaboksms-php)



</div>


<div dir='rtl'>

###  اطلاعات بیشتر
برای مطالعه بیشتر به صفحه معرفی [وب سرویس چابک اس ام اس](https://github.com/Chaboksms/Webservices) مراجعه نمایید .

</div>
