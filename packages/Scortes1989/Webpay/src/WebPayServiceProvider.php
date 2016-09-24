<?php

namespace Scortes1989\Webpay;

use Illuminate\Support\ServiceProvider;

class WebPayServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //$sample_baseurl = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
              
        $webpay_settings = [
            "MODO" => "INTEGRACION",
            "PRIVATE_KEY" => env('webpay_private_key'),
            "PUBLIC_CERT" => env('webpay_public_cert'),
            "WEBPAY_CERT" => env('webpay_cert'),
            "COOMERCE_CODE" => env('webpay_comercial_code'),
            //"URL_RETURN" => $sample_baseurl."?action=result",
            //"URL_FINAL" => $sample_baseurl."?action=end",
        ];

        $webpay = new WebPaySOAP($webpay_settings);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
