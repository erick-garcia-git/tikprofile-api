<?php

namespace TikTokAPI\Response;

use TikTokAPI\Response;

/**
 * VideoUploadIdResponse.
 *
 * @method string getMessage()
 * @method Model\UploadIdPayload getPayload()
 * @method bool isMessage()
 * @method bool isPayload()
 * @method $this setMessage(string $value)
 * @method $this setPayload(Model\UploadIdPayload $value)
 * @method $this unsetMessage()
 * @method $this unsetPayload()
 */
class VideoUploadIdResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'payload'           => 'Model\UploadIdPayload',
    ];
}
