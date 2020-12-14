<?php

namespace TikTokAPI\Response\Model;

use TikTokAPI\AutoPropertyMapper;

/**
 * PosterData.
 *
 * @method string getOid()
 * @method bool isOid()
 * @method $this setOid(string $value)
 * @method $this unsetOid()
 */
class PosterData extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'oid'                     => 'string',
    ];
}
