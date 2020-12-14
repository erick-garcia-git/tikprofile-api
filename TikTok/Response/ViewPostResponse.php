<?php

namespace TikTokAPI\Response;

use TikTokAPI\Response;

/**
 * ViewPostResponse.
 *
 * @method Model\Extra getExtra()
 * @method Model\LobPb getLogPb()
 * @method string getMessage()
 * @method int getStatusCode()
 * @method bool isExtra()
 * @method bool isLogPb()
 * @method bool isMessage()
 * @method bool isStatusCode()
 * @method $this setExtra(Model\Extra $value)
 * @method $this setLogPb(Model\LobPb $value)
 * @method $this setMessage(string $value)
 * @method $this setStatusCode(int $value)
 * @method $this unsetExtra()
 * @method $this unsetLogPb()
 * @method $this unsetMessage()
 * @method $this unsetStatusCode()
 */
class ViewPostResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'status_code'       => 'int',
        'extra'             => 'Model\Extra',
        'log_pb'            => 'Model\LobPb',
    ];
}
