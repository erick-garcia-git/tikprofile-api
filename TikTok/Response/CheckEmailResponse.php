<?php

namespace TikTokAPI\Response;

use TikTokAPI\Response;

/**
 * CheckEmailResponse.
 *
 * @method Model\CheckEmailData getData()
 * @method string getMessage()
 * @method bool isData()
 * @method bool isMessage()
 * @method $this setData(Model\CheckEmailData $value)
 * @method $this setMessage(string $value)
 * @method $this unsetData()
 * @method $this unsetMessage()
 */
class CheckEmailResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'data'                          => 'Model\CheckEmailData',
        'message'                       => 'string',
    ];
}
