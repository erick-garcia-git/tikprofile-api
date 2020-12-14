<?php

namespace TikTokAPI\Response\Model;

use TikTokAPI\AutoPropertyMapper;

/**
 * MusicianData.
 *
 * @OA\Schema(
 *     schema="MusicianData",
 *     description="Musician data model",
 *     title="Musician data model",
 *     @OA\Property(
 *      property="music_count",
 *      description="Music count",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="music_used_count",
 *      description="Music used count",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="digg_count",
 *      description="Digg count",
 *      type="integer"
 *     )
 * )
 */
class MusicianData extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'music_count'                     => 'int',
        'music_used_count'                => 'int',
        'digg_count'                      => 'int',
    ];
}
