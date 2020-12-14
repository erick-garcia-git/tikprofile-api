<?php

namespace TikTokAPI\Response\Model;

use TikTokAPI\AutoPropertyMapper;

/**
 * UploadIdPayload.
 *
 * @method string getUploadID()
 * @method bool isUploadID()
 * @method $this setUploadID(string $value)
 * @method $this unsetUploadID()
 */
class UploadIdPayload extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'uploadID'                     => 'string',
    ];
}
