<?php

namespace TikTokAPI\Response\Model;

use TikTokAPI\AutoPropertyMapper;

/**
 * MusicianData.
 *
 * @method int getDiggCount()
 * @method int getMusicCount()
 * @method int getMusicUsedCount()
 * @method bool isDiggCount()
 * @method bool isMusicCount()
 * @method bool isMusicUsedCount()
 * @method $this setDiggCount(int $value)
 * @method $this setMusicCount(int $value)
 * @method $this setMusicUsedCount(int $value)
 * @method $this unsetDiggCount()
 * @method $this unsetMusicCount()
 * @method $this unsetMusicUsedCount()
 */
class MusicianData extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'music_count'                     => 'int',
        'music_used_count'                => 'int',
        'digg_count'                      => 'int',
    ];
}
