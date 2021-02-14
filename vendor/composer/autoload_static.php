<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit58c89e6946a64b9a3061447cedee864a
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Yabacon\\' => 8,
        ),
        'A' => 
        array (
            'Apps\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Yabacon\\' => 
        array (
            0 => __DIR__ . '/..' . '/yabacon/paystack-php/src',
        ),
        'Apps\\' => 
        array (
            0 => __DIR__ . '/../..' . '/_apps',
            1 => __DIR__ . '/../..' . '/_apps/Apps',
        ),
    );

    public static $classMap = array (
        'Apps\\Core' => __DIR__ . '/../..' . '/_apps/Core.php',
        'Apps\\Cron' => __DIR__ . '/../..' . '/_apps/Apps/Cron.php',
        'Apps\\Device' => __DIR__ . '/../..' . '/_apps/Apps/Device.php',
        'Apps\\EmailTemplate' => __DIR__ . '/../..' . '/_apps/Apps/EmailTemplate.php',
        'Apps\\Emailer' => __DIR__ . '/../..' . '/_apps/Apps/Emailer.php',
        'Apps\\Model' => __DIR__ . '/../..' . '/_apps/Apps/Model.php',
        'Apps\\MysqliDb' => __DIR__ . '/../..' . '/_apps/Apps/MysqliDb.php',
        'Apps\\PHPMailer' => __DIR__ . '/../..' . '/_apps/Apps/PHPMailer.php',
        'Apps\\PaystackBanking' => __DIR__ . '/../..' . '/_apps/Apps/PaystackBanking.php',
        'Apps\\Route' => __DIR__ . '/../..' . '/_apps/Apps/Route.php',
        'Apps\\SMSLive' => __DIR__ . '/../..' . '/_apps/Apps/SMSLive.php',
        'Apps\\SMTP' => __DIR__ . '/../..' . '/_apps/Apps/SMTP.php',
        'Apps\\Session' => __DIR__ . '/../..' . '/_apps/Apps/Session.php',
        'Apps\\Template' => __DIR__ . '/../..' . '/_apps/Apps/Template.php',
        'Apps\\Toast' => __DIR__ . '/../..' . '/_apps/Toast.php',
        'Apps\\phpmailerException' => __DIR__ . '/../..' . '/_apps/Apps/PHPMailer.php',
        'Verot\\Upload\\Upload' => __DIR__ . '/..' . '/verot/class.upload.php/src/class.upload.php',
        'Yabacon\\Paystack' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack.php',
        'Yabacon\\Paystack\\Contracts\\RouteInterface' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Contracts/RouteInterface.php',
        'Yabacon\\Paystack\\Event' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Event.php',
        'Yabacon\\Paystack\\Exception\\ApiException' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Exception/ApiException.php',
        'Yabacon\\Paystack\\Exception\\BadMetaNameException' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Exception/BadMetaNameException.php',
        'Yabacon\\Paystack\\Exception\\PaystackException' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Exception/PaystackException.php',
        'Yabacon\\Paystack\\Exception\\ValidationException' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Exception/ValidationException.php',
        'Yabacon\\Paystack\\Fee' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Fee.php',
        'Yabacon\\Paystack\\Helpers\\Caller' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Helpers/Caller.php',
        'Yabacon\\Paystack\\Helpers\\Router' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Helpers/Router.php',
        'Yabacon\\Paystack\\Http\\Request' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Http/Request.php',
        'Yabacon\\Paystack\\Http\\RequestBuilder' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Http/RequestBuilder.php',
        'Yabacon\\Paystack\\Http\\Response' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Http/Response.php',
        'Yabacon\\Paystack\\MetadataBuilder' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/MetadataBuilder.php',
        'Yabacon\\Paystack\\Routes\\Balance' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Routes/Balance.php',
        'Yabacon\\Paystack\\Routes\\Bank' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Routes/Bank.php',
        'Yabacon\\Paystack\\Routes\\Customer' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Routes/Customer.php',
        'Yabacon\\Paystack\\Routes\\Decision' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Routes/Decision.php',
        'Yabacon\\Paystack\\Routes\\Integration' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Routes/Integration.php',
        'Yabacon\\Paystack\\Routes\\Invoice' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Routes/Invoice.php',
        'Yabacon\\Paystack\\Routes\\Page' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Routes/Page.php',
        'Yabacon\\Paystack\\Routes\\Plan' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Routes/Plan.php',
        'Yabacon\\Paystack\\Routes\\Settlement' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Routes/Settlement.php',
        'Yabacon\\Paystack\\Routes\\Subaccount' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Routes/Subaccount.php',
        'Yabacon\\Paystack\\Routes\\Subscription' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Routes/Subscription.php',
        'Yabacon\\Paystack\\Routes\\Transaction' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Routes/Transaction.php',
        'Yabacon\\Paystack\\Routes\\Transfer' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Routes/Transfer.php',
        'Yabacon\\Paystack\\Routes\\Transferrecipient' => __DIR__ . '/..' . '/yabacon/paystack-php/src/Paystack/Routes/Transferrecipient.php',
        'mlmBinary' => __DIR__ . '/../..' . '/_apps/mlm.php',
        'repData' => __DIR__ . '/../..' . '/_apps/mlm.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit58c89e6946a64b9a3061447cedee864a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit58c89e6946a64b9a3061447cedee864a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit58c89e6946a64b9a3061447cedee864a::$classMap;

        }, null, ClassLoader::class);
    }
}