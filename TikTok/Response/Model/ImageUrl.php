<?php

namespace TikTokAPI\Response\Model;

use TikTokAPI\AutoPropertyMapper;

/**
 * ImageUrl.
 *
 * @method int getHeight()
 * @method string getUri()
 * @method string[] getUrlList()
 * @method int getWidth()
 * @method bool isHeight()
 * @method bool isUri()
 * @method bool isUrlList()
 * @method bool isWidth()
 * @method $this setHeight(int $value)
 * @method $this setUri(string $value)
 * @method $this setUrlList(string[] $value)
 * @method $this setWidth(int $value)
 * @method $this unsetHeight()
 * @method $this unsetUri()
 * @method $this unsetUrlList()
 * @method $this unsetWidth()
 */
class ImageUrl extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'height'                   => 'int',
        'uri'                      => 'string',
        'url_list'                 => 'string[]',
        'width'                    => 'int',
    ];
}
