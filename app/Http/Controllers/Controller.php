<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use TikTokAPI\TikTok;

class Controller extends BaseController
{
    /**
     * @OA\Info(
     *   title="TikProfile RESTful API",
     *   version="1.0",
     *   @OA\Contact(
     *     email="songxunzhao1991@gmail.com",
     *     name="Zhao SongXun"
     *   )
     * )
     */
}

class TikTokController extends Controller
{
    protected $tiktok;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(TikTok $tiktok)
    {
        $this->tiktok = $tiktok;
    }
}

