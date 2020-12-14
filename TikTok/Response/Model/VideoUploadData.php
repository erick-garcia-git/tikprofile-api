<?php

namespace TikTokAPI\Response\Model;

use TikTokAPI\AutoPropertyMapper;

/**
 * VideoUploadData.
 *
 * @method int getBitrate()
 * @method string getCodec()
 * @method string getDefinition()
 * @method float getDuration()
 * @method string getFormat()
 * @method int getHeight()
 * @method string getMd5()
 * @method string getOid()
 * @method int getSize()
 * @method int getWidth()
 * @method bool isBitrate()
 * @method bool isCodec()
 * @method bool isDefinition()
 * @method bool isDuration()
 * @method bool isFormat()
 * @method bool isHeight()
 * @method bool isMd5()
 * @method bool isOid()
 * @method bool isSize()
 * @method bool isWidth()
 * @method $this setBitrate(int $value)
 * @method $this setCodec(string $value)
 * @method $this setDefinition(string $value)
 * @method $this setDuration(float $value)
 * @method $this setFormat(string $value)
 * @method $this setHeight(int $value)
 * @method $this setMd5(string $value)
 * @method $this setOid(string $value)
 * @method $this setSize(int $value)
 * @method $this setWidth(int $value)
 * @method $this unsetBitrate()
 * @method $this unsetCodec()
 * @method $this unsetDefinition()
 * @method $this unsetDuration()
 * @method $this unsetFormat()
 * @method $this unsetHeight()
 * @method $this unsetMd5()
 * @method $this unsetOid()
 * @method $this unsetSize()
 * @method $this unsetWidth()
 */
class VideoUploadData extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'oid'                     => 'string',
        'height'                  => 'int',
        'width'                   => 'int',
        'duration'                => 'float',
        'bitrate'                 => 'int',
        'md5'                     => 'string',
        'format'                  => 'string',
        'size'                    => 'int',
        'definition'              => 'string',
        'codec'                   => 'string',
    ];
}
