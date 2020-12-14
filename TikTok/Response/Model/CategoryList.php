<?php

namespace TikTokAPI\Response\Model;

use TikTokAPI\AutoPropertyMapper;

/**
 * CategoryList.
 *
 * @method Aweme[] getAwemeList()
 * @method int getCategoryType()
 * @method ChallengeInfo getChallengeInfo()
 * @method mixed getClickTrackUrlList()
 * @method string getDesc()
 * @method mixed getTrackUrlList()
 * @method bool isAwemeList()
 * @method bool isCategoryType()
 * @method bool isChallengeInfo()
 * @method bool isClickTrackUrlList()
 * @method bool isDesc()
 * @method bool isTrackUrlList()
 * @method $this setAwemeList(Aweme[] $value)
 * @method $this setCategoryType(int $value)
 * @method $this setChallengeInfo(ChallengeInfo $value)
 * @method $this setClickTrackUrlList(mixed $value)
 * @method $this setDesc(string $value)
 * @method $this setTrackUrlList(mixed $value)
 * @method $this unsetAwemeList()
 * @method $this unsetCategoryType()
 * @method $this unsetChallengeInfo()
 * @method $this unsetClickTrackUrlList()
 * @method $this unsetDesc()
 * @method $this unsetTrackUrlList()
 */
class CategoryList extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'desc'                                => 'string',
        'track_url_list'                      => '',
        'click_track_url_list'                => '',
        'category_type'                       => 'int',
        'aweme_list'                          => 'Aweme[]',
        'challenge_info'                      => 'ChallengeInfo',
    ];
}
