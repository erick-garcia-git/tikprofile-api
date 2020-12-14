<?php

namespace TikTokAPI\Response;

use TikTokAPI\Response;

/**
 * VideoUploadParamsResponse.
 *
 * @method Model\VideoUploadParamsData getData()
 * @method string getMessage()
 * @method bool isData()
 * @method bool isMessage()
 * @method $this setData(Model\VideoUploadParamsData $value)
 * @method $this setMessage(string $value)
 * @method $this unsetData()
 * @method $this unsetMessage()
 */
class VideoUploadParamsResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'data'           => 'Model\VideoUploadParamsData',
    ];
}
