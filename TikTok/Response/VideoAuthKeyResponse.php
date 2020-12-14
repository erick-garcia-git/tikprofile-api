<?php

namespace TikTokAPI\Response;

use TikTokAPI\Response;

/**
 * VideoAuthKeyResponse.
 *
 * @method Model\Extra getExtra()
 * @method Model\LogPb getLogPb()
 * @method string getMessage()
 * @method Model\VideoConfig getVideoConfig()
 * @method bool isExtra()
 * @method bool isLogPb()
 * @method bool isMessage()
 * @method bool isVideoConfig()
 * @method $this setExtra(Model\Extra $value)
 * @method $this setLogPb(Model\LogPb $value)
 * @method $this setMessage(string $value)
 * @method $this setVideoConfig(Model\VideoConfig $value)
 * @method $this unsetExtra()
 * @method $this unsetLogPb()
 * @method $this unsetMessage()
 * @method $this unsetVideoConfig()
 */
class VideoAuthKeyResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'extra'           => 'Model\Extra',
        'log_pb'          => 'Model\LogPb',
        'video_config'    => 'Model\VideoConfig',
    ];
}
