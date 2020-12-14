<?php

namespace App\TModels;

use TikTokAPI\AutoPropertyMapper;

/**
 * Class ChallengeInfo
 * @package App\TModels
 * @OA\Schema(
 *     schema="ChallengeInfo",
 *     description="TikTok Channel model",
 *     title="Channel model",
 *     @OA\Property(
 *      property="cid",
 *      description="Channel id",
 *      type="string"
 *     ),
 *     @OA\Property(
 *      property="cha_name",
 *      description="Channel name",
 *      type="string"
 *     ),
 *     @OA\Property(
 *      property="schema",
 *      description="Schema",
 *      type="string"
 *     ),
 *     @OA\Property(
 *      property="desc",
 *      description="Description",
 *      type="string"
 *     ),
 *     @OA\Property(
 *      property="author",
 *      ref="#/components/schemas/User"
 *     ),
 *     @OA\Property(
 *      property="user_count",
 *      description="User count",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="share_info",
 *      ref="#/components/schemas/ShareInfo"
 *     ),
 *     @OA\Property(
 *      property="type",
 *      description="Channel type",
 *      type="integer",
 *     ),
 *     @OA\Property(
 *      property="sub_type",
 *      description="Channel sub type",
 *      type="integer",
 *     ),
 *     @OA\Property(
 *      property="is_pgcshow",
 *      description="",
 *      type="boolean",
 *     ),
 *     @OA\Property(
 *      property="collect_stat",
 *      description="Collecting stat?",
 *      type="integer",
 *     ),
 *     @OA\Property(
 *      property="is_challenge",
 *      description="Is challenge?",
 *      type="integer",
 *     ),
 *     @OA\Property(
 *      property="view_count",
 *      description="Count of user views",
 *      type="integer",
 *     ),
 *     @OA\Property(
 *      property="is_commerce",
 *      description="Is commerce channel?",
 *      type="boolean",
 *     ),
 * )
 */
class ChallengeInfo extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'cid'                             => 'string',
        'cha_name'                        => 'string',
        'desc'                            => 'string',
        'schema'                          => 'string',
        'author'                          => 'User',
        'user_count'                      => 'int',
        'share_info'                      => 'ShareInfo',
        'connect_music'                   => '',
        'type'                            => 'int',
        'sub_type'                        => 'int',
        'is_pgcshow'                      => 'bool',
        'collect_stat'                    => 'int',
        'is_challenge'                    => 'int',
        'view_count'                      => 'int',
        'is_commerce'                     => 'bool',
        'hashtag_profile'                 => '',
        'cha_attrs'                       => '',
        'banner_list'                     => '',
    ];
}
