<?php

namespace App\TModels;

use TikTokAPI\AutoPropertyMapper;

/**
 * ImageUrl.
 *
 * @OA\Schema(
 *     schema="ImageUrl",
 *     description="TikTok Image Url",
 *     title="TikTok image url",
 *     @OA\Property(
 *      property="height",
 *      description="Image height",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="uri",
 *      description="Image uri",
 *      type="string"
 *     ),
 *     @OA\Property(
 *      property="url_list",
 *      description="Image url list",
 *      type="array",
 *      @OA\Items(
 *          type="string"
 *      )
 *     ),
 *     @OA\Property(
 *      property="width",
 *      description="Image width",
 *      type="integer"
 *     ),
 * )
 */
class ImageUrl extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'height'                   => 'int',
        'uri'                      => 'string',
        'url_list'                 => 'string[]',
        'width'                    => 'int',
    ];
}
