<?php

namespace TikTokAPI\Response\Model;

use TikTokAPI\AutoPropertyMapper;

/**
 * LobPb.
 *
 * @method string getImprId()
 * @method bool isImprId()
 * @method $this setImprId(string $value)
 * @method $this unsetImprId()
 */
class LobPb extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'impr_id'                     => 'string',
    ];
}
