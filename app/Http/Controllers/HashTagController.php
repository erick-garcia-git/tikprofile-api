<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TikTokAPI\TikTok;

class HashTagController extends TikTokController
{
    /**
     * Create a new controller instance.
     *
     * @param TikTok $tiktok TikTok API instance
     */
    public function __construct(TikTok $tiktok)
    {
        parent::__construct($tiktok);
        $this->middleware('auth:api');
    }

    /**
     * @OA\Get(
     *     summary="Search hash tags",
     *     path="/hashtag/search",
     *     operationId="searchHashTag",
     *     @OA\Parameter(
     *      name="keyword",
     *      in="query",
     *      description="Keyword to be searched for",
     *      required=true
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Return array of hash tags",
     *         @OA\JsonContent(
     *             type="array",
     *              @OA\Items(
     *                  ref="#/components/schemas/ChallengeInfo"
     *              )
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
    public function search(Request $request) {
        $validatedData = $this->validate($request, [
            'name' => 'required'
        ]);
        $name = $validatedData['name'];

        $response = $this->tiktok->searchHashtag($name);

        if($response->getStatusCode() == 0) {
            return response()->json([
                'error' => 'TikTokAPIError',
                'status_code' => $response->getStatusCode()
            ], 404);
        }
        $hash_tags = [];
        foreach($response->getChallengeList() as $challenge) {
            $challenge_info = $challenge->getChallengeInfo();
            $hash_tags[] = $challenge_info;
        }
        return response()->json($hash_tags);
    }

    /**
     * @OA\Get(
     *     summary="Get popular hash tags",
     *     path="/hashtag/list",
     *     operationId="listHashTag",
     *     @OA\Response(
     *      response="200",
     *      description="Return array of hash tags",
     *      @OA\JsonContent(
     *          type="array",
     *          @OA\Items(
     *              ref="#/components/schemas/ChallengeInfo"
     *          )
     *      )
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
    public function trending(Request $request) {
        $result = [];

        $trending_content = $this->tiktok->getTrendingContent();
        if($trending_content->getStatusCode() == 0) {
            $categories = $trending_content->getCategoryList();
            foreach($categories as $category) {
                array_push($result, $category->getChallengeInfo());
            }
        }
        return response()->json($result);
    }
}
