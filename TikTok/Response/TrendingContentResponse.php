<?php

namespace TikTokAPI\Response;

use TikTokAPI\Response;

/**
 * TrendingContentResponse.
 *
 * @method Model\CategoryList[] getCategoryList()
 * @method int getCursor()
 * @method Model\Extra getExtra()
 * @method Model\LobPb getLogPb()
 * @method string getMessage()
 * @method int getStatusCode()
 * @method bool isCategoryList()
 * @method bool isCursor()
 * @method bool isExtra()
 * @method bool isLogPb()
 * @method bool isMessage()
 * @method bool isStatusCode()
 * @method $this setCategoryList(Model\CategoryList[] $value)
 * @method $this setCursor(int $value)
 * @method $this setExtra(Model\Extra $value)
 * @method $this setLogPb(Model\LobPb $value)
 * @method $this setMessage(string $value)
 * @method $this setStatusCode(int $value)
 * @method $this unsetCategoryList()
 * @method $this unsetCursor()
 * @method $this unsetExtra()
 * @method $this unsetLogPb()
 * @method $this unsetMessage()
 * @method $this unsetStatusCode()
 */
class TrendingContentResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'status_code'       => 'int',
        'cursor'            => 'int',
        'category_list'     => 'Model\CategoryList[]',
        'extra'             => 'Model\Extra',
        'log_pb'            => 'Model\LobPb',
    ];
}
