<?php

namespace TikTokAPI\Response\Model;

use TikTokAPI\AutoPropertyMapper;

/**
 * VideoUploadParamsData.
 *
 * @method string getAccessKey()
 * @method string getBucket()
 * @method int getDelayUpload()
 * @method mixed getDnsInfo()
 * @method EdgeNode[] getEdgeNodes()
 * @method string getExtraParam()
 * @method string getOid()
 * @method PosterData getPoster()
 * @method string getToken()
 * @method mixed getTosHeaders()
 * @method string getTosHost()
 * @method string getTosSign()
 * @method mixed getTosUpHosts()
 * @method string getTraceId()
 * @method string getUploadId()
 * @method string getUploadMode()
 * @method string getVid()
 * @method VideoUploadData getVideo()
 * @method bool isAccessKey()
 * @method bool isBucket()
 * @method bool isDelayUpload()
 * @method bool isDnsInfo()
 * @method bool isEdgeNodes()
 * @method bool isExtraParam()
 * @method bool isOid()
 * @method bool isPoster()
 * @method bool isToken()
 * @method bool isTosHeaders()
 * @method bool isTosHost()
 * @method bool isTosSign()
 * @method bool isTosUpHosts()
 * @method bool isTraceId()
 * @method bool isUploadId()
 * @method bool isUploadMode()
 * @method bool isVid()
 * @method bool isVideo()
 * @method $this setAccessKey(string $value)
 * @method $this setBucket(string $value)
 * @method $this setDelayUpload(int $value)
 * @method $this setDnsInfo(mixed $value)
 * @method $this setEdgeNodes(EdgeNode[] $value)
 * @method $this setExtraParam(string $value)
 * @method $this setOid(string $value)
 * @method $this setPoster(PosterData $value)
 * @method $this setToken(string $value)
 * @method $this setTosHeaders(mixed $value)
 * @method $this setTosHost(string $value)
 * @method $this setTosSign(string $value)
 * @method $this setTosUpHosts(mixed $value)
 * @method $this setTraceId(string $value)
 * @method $this setUploadId(string $value)
 * @method $this setUploadMode(string $value)
 * @method $this setVid(string $value)
 * @method $this setVideo(VideoUploadData $value)
 * @method $this unsetAccessKey()
 * @method $this unsetBucket()
 * @method $this unsetDelayUpload()
 * @method $this unsetDnsInfo()
 * @method $this unsetEdgeNodes()
 * @method $this unsetExtraParam()
 * @method $this unsetOid()
 * @method $this unsetPoster()
 * @method $this unsetToken()
 * @method $this unsetTosHeaders()
 * @method $this unsetTosHost()
 * @method $this unsetTosSign()
 * @method $this unsetTosUpHosts()
 * @method $this unsetTraceId()
 * @method $this unsetUploadId()
 * @method $this unsetUploadMode()
 * @method $this unsetVid()
 * @method $this unsetVideo()
 */
class VideoUploadParamsData extends AutoPropertyMapper
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
        'edge_nodes'              => 'EdgeNode[]',
        'delay_upload'            => 'int',
        'trace_id'                => 'string',
        'upload_id'               => 'string',
        'video'                   => 'VideoUploadData',
        'poster'                  => 'PosterData',
    ];
}
