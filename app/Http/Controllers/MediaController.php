<?php


namespace App\Http\Controllers;


class MediaController extends TikTokController
{
    /**
     * Create a new controller instance.
     *
     * @param TikTok $tiktok TikTok instance
     */
    public function __construct(TikTok $tiktok)
    {
        parent::__construct($tiktok);
        $this->middleware('auth:api');
    }

    public function getRandom() {

    }
}
