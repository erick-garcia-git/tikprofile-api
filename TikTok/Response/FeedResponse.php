<?php

namespace TikTokAPI\Response;

use TikTokAPI\Response;

/**
 * FeedResponse.
 *
 * @method Model\Aweme[] getAwemeList()
 * @method Model\Extra getExtra()
 * @method int getHasMore()
 * @method int getHomeModel()
 * @method Model\LobPb getLogPb()
 * @method int getMaxCursor()
 * @method string getMessage()
 * @method int getMinCursor()
 * @method mixed getPreloadAds()
 * @method mixed getPreloadAwemes()
 * @method int getRefreshClear()
 * @method int getStatusCode()
 * @method bool isAwemeList()
 * @method bool isExtra()
 * @method bool isHasMore()
 * @method bool isHomeModel()
 * @method bool isLogPb()
 * @method bool isMaxCursor()
 * @method bool isMessage()
 * @method bool isMinCursor()
 * @method bool isPreloadAds()
 * @method bool isPreloadAwemes()
 * @method bool isRefreshClear()
 * @method bool isStatusCode()
 * @method $this setAwemeList(Model\Aweme[] $value)
 * @method $this setExtra(Model\Extra $value)
 * @method $this setHasMore(int $value)
 * @method $this setHomeModel(int $value)
 * @method $this setLogPb(Model\LobPb $value)
 * @method $this setMaxCursor(int $value)
 * @method $this setMessage(string $value)
 * @method $this setMinCursor(int $value)
 * @method $this setPreloadAds(mixed $value)
 * @method $this setPreloadAwemes(mixed $value)
 * @method $this setRefreshClear(int $value)
 * @method $this setStatusCode(int $value)
 * @method $this unsetAwemeList()
 * @method $this unsetExtra()
 * @method $this unsetHasMore()
 * @method $this unsetHomeModel()
 * @method $this unsetLogPb()
 * @method $this unsetMaxCursor()
 * @method $this unsetMessage()
 * @method $this unsetMinCursor()
 * @method $this unsetPreloadAds()
 * @method $this unsetPreloadAwemes()
 * @method $this unsetRefreshClear()
 * @method $this unsetStatusCode()
 */
class FeedResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'status_code'       => 'int',
        'min_cursor'        => 'int',
        'max_cursor'        => 'int',
        'has_more'          => 'int',
        'aweme_list'        => 'Model\Aweme[]',
        'home_model'        => 'int',
        'refresh_clear'     => 'int',
        'extra'             => 'Model\Extra',
        'log_pb'            => 'Model\LobPb',
        'preload_ads'       => '',
        'preload_awemes'    => '',
    ];
}
