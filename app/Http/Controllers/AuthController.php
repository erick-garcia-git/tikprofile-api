<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use TikTokAPI\TikTok;

class AuthController extends TikTokController
{
    /**
     * Create a new controller instance.
     *
     * @param TikTok $tiktok    TikTok API instance
     */
    public function __construct(TikTok $tiktok)
    {
        parent::__construct($tiktok);
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    //

    /**
     * @OA\Post(
     *     summary="Authenticate user",
     *     path="/auth/login",
     *     operationId="login",
     *     @OA\RequestBody(
     *          @OA\MediaType(
     *              mediaType="multipart/form-data",
     *              @OA\Schema(
     *                  type="object",
     *                  required={"user_id"},
     *                  @OA\Property(
     *                      property="user_id",
     *                      description="TikTok user ID",
     *                      type="string"
     *                  ),
     *                  @OA\Property(
     *                      property="cookies.dat",
     *                      description="cookies file of session",
     *                      type="file"
     *                  ),
     *                  @OA\Property(
     *                      property="settings.dat",
     *                      description="settings file of session",
     *                      type="file"
     *                  )
     *              )
     *          )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Return jwt token",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                  property="access_token",
     *                  description="JWT access token",
     *                  type="string"
     *             ),
     *             @OA\Property(
     *                  property="token_type",
     *                  description="Token type: bearer",
     *                  type="string"
     *             ),
     *             @OA\Property(
     *                  property="expires_in",
     *                  description="Expire time",
     *                  type="integer"
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response="401",
     *         description="Unauthorized",
     *     ),
     * )
     */
    public function login(Request $request)
    {
        $validatedData = $this->validate($request, [
            'user_id' => 'required'
        ]);
        $validatedData['password'] = 'tiktok111@23456789';

        $user_id = $validatedData['user_id'];
        $password = $validatedData['password'];

        $this->uploadTiktokSession($request, $user_id);
        $profile = $this->tiktok->getSelfProfile();

        if($profile->getStatusCode() != 0 || $profile->getUser()->getUid() != $user_id) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $user = User::where('user_id', '=', $user_id)->first();

        if(!$user) {
            $user = new User();
            $user->user_id = $profile->getUser()->getUid();
            $user->sec_user_id = $profile->getUser()->getSecUid();
            $user->avatar_url = $profile->getUser()->getAvatarThumb();
            $user->password = Hash::make($password);
            $user->save();
        }

        if (! $token = auth()->attempt($validatedData)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token, $user);
    }

    private function uploadTiktokSession(Request $request, string $username) {
        $this->tiktok->setUser($username);
        $sessionPath = $this->tiktok->settings->userStorage;
        if($request->hasFile('settings.dat')) {
            $request->file('settings.dat')->move($sessionPath);
        }

        if($request->hasFile('cookies.dat')) {
            $request->file('cookies.dat')->move($sessionPath);
        }
    }

    protected function respondWithToken($token, $user)
    {
        return response()->json([
            'user' => $user,
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
