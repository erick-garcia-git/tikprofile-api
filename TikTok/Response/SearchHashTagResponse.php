<?php

namespace TikTokAPI\Response;

use TikTokAPI\Response;

/**
 * SearchHashTagResponse.
 *
 * @method Model\Challenge[] getChallengeList()
 */
class SearchHashTagResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'challenge_list' =>  'Model\Challenge[]'
    ];
}
