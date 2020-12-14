<?php

namespace TikTokAPI\Response\Model;

use TikTokAPI\AutoPropertyMapper;

/**
 * ChallengeList.
 *
 * @method ChallengeInfo getChallengeInfo()
 * @method int getItems()
 * @method int getPosition()
 * @method bool isChallengeInfo()
 * @method bool isItems()
 * @method bool isPosition()
 * @method $this setChallengeInfo(ChallengeInfo $value)
 * @method $this setItems(int $value)
 * @method $this setPosition(int $value)
 * @method $this unsetChallengeInfo()
 * @method $this unsetItems()
 * @method $this unsetPosition()
 */
class ChallengeList extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'challenge_info'                  => 'ChallengeInfo',
        'position'                        => 'int',
        'items'                           => 'int',
    ];
}
