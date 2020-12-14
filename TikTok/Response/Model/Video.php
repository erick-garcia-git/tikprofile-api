<?php

namespace TikTokAPI\Response\Model;

use TikTokAPI\AutoPropertyMapper;

/**
 * Video.
 *
 * @method mixed getBitRate()
 * @method ImageUrl getCover()
 * @method ImageUrl getOriginCover()
 * @method bool isBitRate()
 * @method bool isCover()
 * @method bool isOriginCover()
 * @method $this setBitRate(mixed $value)
 * @method $this setCover(ImageUrl $value)
 * @method $this setOriginCover(ImageUrl $value)
 * @method $this unsetBitRate()
 * @method $this unsetCover()
 * @method $this unsetOriginCover()
 */
class Video extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'cover'                        => 'ImageUrl',
        'origin_cover'                 => 'ImageUrl',
        'bit_rate'                     => '',
    ];
}
