<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8bab1790e7afc8af0586b052d452eecd
{
    public static $files = array (
        'e40631d46120a9c38ea139981f8dab26' => __DIR__ . '/..' . '/ircmaxell/password-compat/lib/password.php',
        'edc6464955a37aa4d5fbf39d40fb6ee7' => __DIR__ . '/..' . '/symfony/polyfill-php55/bootstrap.php',
        '3e2471375464aac821502deb0ac64275' => __DIR__ . '/..' . '/symfony/polyfill-php54/bootstrap.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'b067bc7112e384b61c701452d53a14a8' => __DIR__ . '/..' . '/mtdowling/jmespath.php/src/JmesPath.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        '8a9dc1de0ca7e01f3e08231539562f61' => __DIR__ . '/..' . '/aws/aws-sdk-php/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php55\\' => 23,
            'Symfony\\Polyfill\\Php54\\' => 23,
            'Symfony\\Component\\HttpFoundation\\' => 33,
            'Symfony\\Component\\EventDispatcher\\' => 34,
            'Stripe\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Pop\\Shipping\\' => 13,
        ),
        'O' => 
        array (
            'Omnipay\\WorldPay\\' => 17,
            'Omnipay\\TwoCheckout\\' => 20,
            'Omnipay\\TargetPay\\' => 18,
            'Omnipay\\Stripe\\' => 15,
            'Omnipay\\SecurePay\\' => 18,
            'Omnipay\\SagePay\\' => 16,
            'Omnipay\\Pin\\' => 12,
            'Omnipay\\PaymentExpress\\' => 23,
            'Omnipay\\Payflow\\' => 16,
            'Omnipay\\PayPal\\' => 15,
            'Omnipay\\PayFast\\' => 16,
            'Omnipay\\Netaxept\\' => 17,
            'Omnipay\\NetBanx\\' => 16,
            'Omnipay\\MultiSafepay\\' => 21,
            'Omnipay\\Mollie\\' => 15,
            'Omnipay\\Migs\\' => 13,
            'Omnipay\\Manual\\' => 15,
            'Omnipay\\GoCardless\\' => 19,
            'Omnipay\\FirstData\\' => 18,
            'Omnipay\\Eway\\' => 13,
            'Omnipay\\Dummy\\' => 14,
            'Omnipay\\Coinbase\\' => 17,
            'Omnipay\\CardSave\\' => 17,
            'Omnipay\\Buckaroo\\' => 17,
            'Omnipay\\AuthorizeNet\\' => 21,
        ),
        'J' => 
        array (
            'JmesPath\\' => 9,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'A' => 
        array (
            'Aws\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
        'Symfony\\Polyfill\\Php55\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php55',
        ),
        'Symfony\\Polyfill\\Php54\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php54',
        ),
        'Symfony\\Component\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-foundation',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Pop\\Shipping\\' => 
        array (
            0 => __DIR__ . '/..' . '/popphp/pop-shipping/src',
        ),
        'Omnipay\\WorldPay\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/worldpay/src',
        ),
        'Omnipay\\TwoCheckout\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/2checkout/src',
        ),
        'Omnipay\\TargetPay\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/targetpay/src',
        ),
        'Omnipay\\Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/stripe/src',
        ),
        'Omnipay\\SecurePay\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/securepay/src',
        ),
        'Omnipay\\SagePay\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/sagepay/src',
        ),
        'Omnipay\\Pin\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/pin/src',
        ),
        'Omnipay\\PaymentExpress\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/paymentexpress/src',
        ),
        'Omnipay\\Payflow\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/payflow/src',
        ),
        'Omnipay\\PayPal\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/paypal/src',
        ),
        'Omnipay\\PayFast\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/payfast/src',
        ),
        'Omnipay\\Netaxept\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/netaxept/src',
        ),
        'Omnipay\\NetBanx\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/netbanx/src',
        ),
        'Omnipay\\MultiSafepay\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/multisafepay/src',
        ),
        'Omnipay\\Mollie\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/mollie/src',
        ),
        'Omnipay\\Migs\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/migs/src',
        ),
        'Omnipay\\Manual\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/manual/src',
        ),
        'Omnipay\\GoCardless\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/gocardless/src',
        ),
        'Omnipay\\FirstData\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/firstdata/src',
        ),
        'Omnipay\\Eway\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/eway/src',
        ),
        'Omnipay\\Dummy\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/dummy/src',
        ),
        'Omnipay\\Coinbase\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/coinbase/src',
        ),
        'Omnipay\\CardSave\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/cardsave/src',
        ),
        'Omnipay\\Buckaroo\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/buckaroo/src',
        ),
        'Omnipay\\AuthorizeNet\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/authorizenet/src',
        ),
        'JmesPath\\' => 
        array (
            0 => __DIR__ . '/..' . '/mtdowling/jmespath.php/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Aws\\' => 
        array (
            0 => __DIR__ . '/..' . '/aws/aws-sdk-php/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'O' => 
        array (
            'Omnipay\\Common\\' => 
            array (
                0 => __DIR__ . '/..' . '/omnipay/common/src',
            ),
        ),
        'G' => 
        array (
            'Guzzle\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/tests',
            ),
            'Guzzle' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/src',
            ),
        ),
    );

    public static $classMap = array (
        'CallbackFilterIterator' => __DIR__ . '/..' . '/symfony/polyfill-php54/Resources/stubs/CallbackFilterIterator.php',
        'Omnipay\\Omnipay' => __DIR__ . '/..' . '/omnipay/common/src/Omnipay/Omnipay.php',
        'RecursiveCallbackFilterIterator' => __DIR__ . '/..' . '/symfony/polyfill-php54/Resources/stubs/RecursiveCallbackFilterIterator.php',
        'SessionHandlerInterface' => __DIR__ . '/..' . '/symfony/polyfill-php54/Resources/stubs/SessionHandlerInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8bab1790e7afc8af0586b052d452eecd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8bab1790e7afc8af0586b052d452eecd::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit8bab1790e7afc8af0586b052d452eecd::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit8bab1790e7afc8af0586b052d452eecd::$classMap;

        }, null, ClassLoader::class);
    }
}
