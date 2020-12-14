<?php


namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use TikTokAPI\TikTok;

class TikTokServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(TikTok::class, function ($app) {
            $tiktok = new TikTok(false);
            $tiktok->setAuthKey(env('TIKTOK_AUTH_KEY'));
            return $tiktok;
        });
    }
}
