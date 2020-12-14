<?php

namespace TikTokAPI\Response\Model;

use TikTokAPI\AutoPropertyMapper;

/**
 * CheckEmailData.
 *
 * @method int getIsRegistered()
 * @method bool isIsRegistered()
 * @method $this setIsRegistered(int $value)
 * @method $this unsetIsRegistered()
 */
class CheckEmailData extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'is_registered'                     => 'int',
    ];
}
