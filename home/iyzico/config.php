<?php

require_once('IyzipayBootstrap.php');

IyzipayBootstrap::init();

class Config
{
    public static function options()
    {
        $options = new \Iyzipay\Options();
        $options->setApiKey("sandbox-L9TTYi0zk0aL2tJE98D3veHezius8TcO");
        $options->setSecretKey("sandbox-S6gELW3SMYr2LkT4OAaeTLEA01Rusaif");
        $options->setBaseUrl("https://sandbox-api.iyzipay.com");
        return $options;
    }
}