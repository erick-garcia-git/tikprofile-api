<?php


namespace App\Http\Controllers;


use App\Models\FeedCache;
use TikTokAPI\TikTok;

class UserController extends TikTokController
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

    /**
     * @OA\Post(
     *     summary="Get random user",
     *     path="/user/",
     *     operationId="GetRandomUser",
     *     @OA\RequestBody(),
     *     @OA\Response(
     *         response="200",
     *         description="Return random user",
     *         @OA\JsonContent(
     *             ref="#/components/schemas/User"
     *         )
     *     ),
     *     @OA\Response(
     *      response="404",
     *      description="Unauthorized",
     *      @OA\JsonContent(
     *          @OA\Property(
     *              property="error",
     *              type="string"
     *          ),
     *          @OA\Property(
     *              property="status_code",
     *              type="integer"
     *          )
     *      )
     *     ),
     * )
     */

    public function getRandom(Request $request) {
        $user = $request->user();
        $feed_cache = FeedCache::firstOrNew(['user_id' => $user->user_id]);

        $user_cursor = $feed_cache->user_cursor;
        $user_last_index = $feed_cache->user_last_index;

        $response = $this->tiktok->getFeed($user_cursor);

        if($response->getStatusCode() == 0) {
            $list = $response->getAwemeList();

            if(empty($list)) {
                return response()->json(['error' => 'NoUserFound'], 404);
            }

            $feed_entry = $list[$user_last_index];
            $author = $feed_entry->getAuthor();

            $user_last_index += 1;
            if($user_last_index >= count($list)) {
                $user_last_index = 0;
                $user_cursor += 1;
            }
            $feed_cache->user_last_index = $user_last_index;
            $feed_cache->user_cursor = $user_cursor;
            $feed_cache->save();

            return response()->json($author);
        } else {
            return response()->json(['error' => 'NoUserFound'], 404);
        }
    }

    /**
     * @param Request $request Request object
     * @param string $sec_uid user id
     * @return object TikTok user object
     *
     * @OA\Post(
     *     summary="Follow a user",
     *     path="/user/{sec_uid}/follow",
     *     operationId="FollowUser",
     *     @OA\Parameter(
     *         name="sec_uid",
     *         in="path",
     *         description="Security user id",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Return random user",
     *         @OA\JsonContent(
     *             ref="#/components/schemas/User"
     *         )
     *     ),
     *     @OA\Response(
     *      response="404",
     *      description="Unauthorized",
     *      @OA\JsonContent(
     *          @OA\Property(
     *              property="error",
     *              type="string"
     *          ),
     *          @OA\Property(
     *              property="status_code",
     *              type="integer"
     *          )
     *      )
     *     ),
     * )
     */

    public function follow(Request $request, $sec_uid) {
        $user = $request->user();
        $feed_cache = FeedCache::where('user_id', $user->user_id)->firstOrFail();
        $feed_cache->day_coins += (int)env('FREE_COIN');

        $response = $this->tiktok->follow($sec_uid);
        if($response->getStatusCode() == 0) {
            $user->coin = $user->coin === null ? 2 : $user->coin + 2;
            $user->save();
            return response()->json(['status_code' => 0]);
        } else {
            return response()->json(['error' => 'TikTokAPIError', 'status_code' => $response->getStatusCode()]);
        }
    }
}
