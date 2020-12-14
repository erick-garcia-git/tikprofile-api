<?php


namespace TikTokAPI\Response\Model;


use TikTokAPI\AutoPropertyMapper;

/**
 * Challenge.
 *
 * @method ChallengeInfo getChallengeInfo()
 *
 **/
class Challenge extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'challenge_info' => 'ChallengeInfo'
    ];
}
