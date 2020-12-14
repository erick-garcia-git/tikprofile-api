<?php

namespace TikTokAPI\Response;

use TikTokAPI\Response;

/**
 * CreateAwemeResponse.
 *
 * @method Model\Aweme getAweme()
 * @method Model\Extra getExtra()
 * @method Model\LobPb getLogPb()
 * @method string getMessage()
 * @method int getStatusCode()
 * @method bool isAweme()
 * @method bool isExtra()
 * @method bool isLogPb()
 * @method bool isMessage()
 * @method bool isStatusCode()
 * @method $this setAweme(Model\Aweme $value)
 * @method $this setExtra(Model\Extra $value)
 * @method $this setLogPb(Model\LobPb $value)
 * @method $this setMessage(string $value)
 * @method $this setStatusCode(int $value)
 * @method $this unsetAweme()
 * @method $this unsetExtra()
 * @method $this unsetLogPb()
 * @method $this unsetMessage()
 * @method $this unsetStatusCode()
 */
class CreateAwemeResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'extra'             => 'Model\Extra',
        'log_pb'            => 'Model\LobPb',
        'status_code'       => 'int',
        'aweme'             => 'Model\Aweme',
    ];
}
