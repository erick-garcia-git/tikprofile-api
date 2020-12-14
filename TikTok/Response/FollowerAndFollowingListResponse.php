<?php

namespace TikTokAPI\Response;

use TikTokAPI\Response;

/**
 * FollowerAndFollowingListResponse.
 *
 * @method Model\Extra getExtra()
 * @method Model\User getFollowers()
 * @method Model\User getFollowing()
 * @method bool getHasMore()
 * @method Model\LobPb getLogPb()
 * @method string getMaxTime()
 * @method string getMessage()
 * @method string getMinTime()
 * @method string getMyselfUserId()
 * @method int getOffset()
 * @method bool getRecHasMore()
 * @method int getStatusCode()
 * @method int getTotal()
 * @method bool isExtra()
 * @method bool isFollowers()
 * @method bool isFollowing()
 * @method bool isHasMore()
 * @method bool isLogPb()
 * @method bool isMaxTime()
 * @method bool isMessage()
 * @method bool isMinTime()
 * @method bool isMyselfUserId()
 * @method bool isOffset()
 * @method bool isRecHasMore()
 * @method bool isStatusCode()
 * @method bool isTotal()
 * @method $this setExtra(Model\Extra $value)
 * @method $this setFollowers(Model\User $value)
 * @method $this setFollowing(Model\User $value)
 * @method $this setHasMore(bool $value)
 * @method $this setLogPb(Model\LobPb $value)
 * @method $this setMaxTime(string $value)
 * @method $this setMessage(string $value)
 * @method $this setMinTime(string $value)
 * @method $this setMyselfUserId(string $value)
 * @method $this setOffset(int $value)
 * @method $this setRecHasMore(bool $value)
 * @method $this setStatusCode(int $value)
 * @method $this setTotal(int $value)
 * @method $this unsetExtra()
 * @method $this unsetFollowers()
 * @method $this unsetFollowing()
 * @method $this unsetHasMore()
 * @method $this unsetLogPb()
 * @method $this unsetMaxTime()
 * @method $this unsetMessage()
 * @method $this unsetMinTime()
 * @method $this unsetMyselfUserId()
 * @method $this unsetOffset()
 * @method $this unsetRecHasMore()
 * @method $this unsetStatusCode()
 * @method $this unsetTotal()
 */
class FollowerAndFollowingListResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'extra'             => 'Model\Extra',
        'log_pb'            => 'Model\LobPb',
        'has_more'          => 'bool',
        'status_code'       => 'int',
        'following'         => 'Model\User',
        'followers'         => 'Model\User',
        'rec_has_more'      => 'bool',
        'max_time'          => 'string',
        'offset'            => 'int',
        'min_time'          => 'string',
        'total'             => 'int',
        'myself_user_id'    => 'string',
    ];
}
