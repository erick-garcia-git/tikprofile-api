<?php

namespace TikTokAPI\Response\Model;

use TikTokAPI\AutoPropertyMapper;

/**
 * ChallengeInfo.
 *
 * @method User getAuthor()
 * @method mixed getBannerList()
 * @method mixed getChaAttrs()
 * @method string getChaName()
 * @method string getCid()
 * @method int getCollectStat()
 * @method mixed getConnectMusic()
 * @method string getDesc()
 * @method mixed getHashtagProfile()
 * @method int getIsChallenge()
 * @method bool getIsCommerce()
 * @method bool getIsPgcshow()
 * @method string getSchema()
 * @method ShareInfo getShareInfo()
 * @method int getSubType()
 * @method int getType()
 * @method int getUserCount()
 * @method int getViewCount()
 * @method bool isAuthor()
 * @method bool isBannerList()
 * @method bool isChaAttrs()
 * @method bool isChaName()
 * @method bool isCid()
 * @method bool isCollectStat()
 * @method bool isConnectMusic()
 * @method bool isDesc()
 * @method bool isHashtagProfile()
 * @method bool isIsChallenge()
 * @method bool isIsCommerce()
 * @method bool isIsPgcshow()
 * @method bool isSchema()
 * @method bool isShareInfo()
 * @method bool isSubType()
 * @method bool isType()
 * @method bool isUserCount()
 * @method bool isViewCount()
 * @method $this setAuthor(User $value)
 * @method $this setBannerList(mixed $value)
 * @method $this setChaAttrs(mixed $value)
 * @method $this setChaName(string $value)
 * @method $this setCid(string $value)
 * @method $this setCollectStat(int $value)
 * @method $this setConnectMusic(mixed $value)
 * @method $this setDesc(string $value)
 * @method $this setHashtagProfile(mixed $value)
 * @method $this setIsChallenge(int $value)
 * @method $this setIsCommerce(bool $value)
 * @method $this setIsPgcshow(bool $value)
 * @method $this setSchema(string $value)
 * @method $this setShareInfo(ShareInfo $value)
 * @method $this setSubType(int $value)
 * @method $this setType(int $value)
 * @method $this setUserCount(int $value)
 * @method $this setViewCount(int $value)
 * @method $this unsetAuthor()
 * @method $this unsetBannerList()
 * @method $this unsetChaAttrs()
 * @method $this unsetChaName()
 * @method $this unsetCid()
 * @method $this unsetCollectStat()
 * @method $this unsetConnectMusic()
 * @method $this unsetDesc()
 * @method $this unsetHashtagProfile()
 * @method $this unsetIsChallenge()
 * @method $this unsetIsCommerce()
 * @method $this unsetIsPgcshow()
 * @method $this unsetSchema()
 * @method $this unsetShareInfo()
 * @method $this unsetSubType()
 * @method $this unsetType()
 * @method $this unsetUserCount()
 * @method $this unsetViewCount()
 */
class ChallengeInfo extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'cid'                             => 'string',
        'cha_name'                        => 'string',
        'desc'                            => 'string',
        'schema'                          => 'string',
        'author'                          => 'User',
        'user_count'                      => 'int',
        'share_info'                      => 'ShareInfo',
        'connect_music'                   => '',
        'type'                            => 'int',
        'sub_type'                        => 'int',
        'is_pgcshow'                      => 'bool',
        'collect_stat'                    => 'int',
        'is_challenge'                    => 'int',
        'view_count'                      => 'int',
        'is_commerce'                     => 'bool',
        'hashtag_profile'                 => '',
        'cha_attrs'                       => '',
        'banner_list'                     => '',
    ];
}
