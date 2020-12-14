<?php

namespace App\TModels;

use TikTokAPI\AutoPropertyMapper;

/**
 * ShareInfo.
 *
 * @OA\Schema(
 *     schema="ShareInfo",
 *     description="Various sharing information",
 *     title="Sharing information",
 *     @OA\Property(
 *      property="share_url",
 *      description="Share url",
 *      type="string"
 *     ),
 *     @OA\Property(
 *      property="share_weibo_desc",
 *      description="Share weibo description",
 *      type="string"
 *     ),
 *     @OA\Property(
 *      property="share_title",
 *      description="Share title",
 *      type="string"
 *     ),
 *     @OA\Property(
 *      property="share_qrcode_url",
 *      description="Share qrcode url",
 *      ref="#/components/schemas/ImageUrl"
 *     ),
 *     @OA\Property(
 *      property="share_image_url",
 *      description="Share image url",
 *      ref="#/components/schemas/ImageUrl"
 *     ),
 *     @OA\Property(
 *      property="share_title_myself",
 *      description="Share title myself",
 *      type="string"
 *     ),
 *     @OA\Property(
 *      property="share_desc",
 *      description="Share description",
 *      type="string"
 *     ),
 *     @OA\Property(
 *      property="bool_persist",
 *      description="Persist?",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="share_title_other",
 *      description="Shared other title",
 *      type="string"
 *     ),
 * )
 */
class ShareInfo extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'share_url'                     => 'string',
        'share_weibo_desc'              => 'string',
        'share_title'                   => 'string',
        'share_qrcode_url'              => 'ImageUrl',
        'share_image_url'               => 'ImageUrl',
        'share_title_myself'            => 'string',
        'share_desc'                    => 'string',
        'bool_persist'                  => 'int',
        'share_title_other'             => 'string',
    ];
}
