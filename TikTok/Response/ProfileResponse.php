<?php

namespace TikTokAPI\Response;

use TikTokAPI\Response;

/**
 * ProfileResponse.
 *
 * @method Model\Extra getExtra()
 * @method Model\LobPb getLogPb()
 * @method string getMessage()
 * @method int getStatusCode()
 * @method Model\User getUser()
 * @method bool isExtra()
 * @method bool isLogPb()
 * @method bool isMessage()
 * @method bool isStatusCode()
 * @method bool isUser()
 * @method $this setExtra(Model\Extra $value)
 * @method $this setLogPb(Model\LobPb $value)
 * @method $this setMessage(string $value)
 * @method $this setStatusCode(int $value)
 * @method $this setUser(Model\User $value)
 * @method $this unsetExtra()
 * @method $this unsetLogPb()
 * @method $this unsetMessage()
 * @method $this unsetStatusCode()
 * @method $this unsetUser()
 */
class ProfileResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'status_code'       => 'int',
        'user'              => 'Model\User',
        'extra'             => 'Model\Extra',
        'log_pb'            => 'Model\LobPb',
    ];
}
