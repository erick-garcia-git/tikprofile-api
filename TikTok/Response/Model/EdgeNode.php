<?php

namespace TikTokAPI\Response\Model;

use TikTokAPI\AutoPropertyMapper;

/**
 * EdgeNode.
 *
 * @method string getAccessKey()
 * @method string getBucket()
 * @method mixed getDnsInfo()
 * @method string getExtraParam()
 * @method string getOid()
 * @method string getToken()
 * @method mixed getTosHeaders()
 * @method string getTosHost()
 * @method string getTosSign()
 * @method mixed getTosUpHosts()
 * @method string getUploadMode()
 * @method string getVid()
 * @method bool isAccessKey()
 * @method bool isBucket()
 * @method bool isDnsInfo()
 * @method bool isExtraParam()
 * @method bool isOid()
 * @method bool isToken()
 * @method bool isTosHeaders()
 * @method bool isTosHost()
 * @method bool isTosSign()
 * @method bool isTosUpHosts()
 * @method bool isUploadMode()
 * @method bool isVid()
 * @method $this setAccessKey(string $value)
 * @method $this setBucket(string $value)
 * @method $this setDnsInfo(mixed $value)
 * @method $this setExtraParam(string $value)
 * @method $this setOid(string $value)
 * @method $this setToken(string $value)
 * @method $this setTosHeaders(mixed $value)
 * @method $this setTosHost(string $value)
 * @method $this setTosSign(string $value)
 * @method $this setTosUpHosts(mixed $value)
 * @method $this setUploadMode(string $value)
 * @method $this setVid(string $value)
 * @method $this unsetAccessKey()
 * @method $this unsetBucket()
 * @method $this unsetDnsInfo()
 * @method $this unsetExtraParam()
 * @method $this unsetOid()
 * @method $this unsetToken()
 * @method $this unsetTosHeaders()
 * @method $this unsetTosHost()
 * @method $this unsetTosSign()
 * @method $this unsetTosUpHosts()
 * @method $this unsetUploadMode()
 * @method $this unsetVid()
 */
class EdgeNode extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'vid'                     => 'string',
        'oid'                     => 'string',
        'tos_host'                => 'string',
        'tos_up_hosts'            => '',
        'tos_headers'             => '',
        'tos_sign'                => 'string',
        'token'                   => 'string',
        'extra_param'             => 'string',
        'bucket'                  => 'string',
        'access_key'              => 'string',
        'dns_info'                => '',
        'upload_mode'             => 'string',
    ];
}
