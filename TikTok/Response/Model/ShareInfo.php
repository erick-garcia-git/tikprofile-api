<?php

namespace TikTokAPI\Response\Model;

use TikTokAPI\AutoPropertyMapper;

/**
 * ShareInfo.
 *
 * @method int getBoolPersist()
 * @method string getShareDesc()
 * @method ImageUrl getShareImageUrl()
 * @method ImageUrl getShareQrcodeUrl()
 * @method string getShareTitle()
 * @method string getShareTitleMyself()
 * @method string getShareTitleOther()
 * @method string getShareUrl()
 * @method string getShareWeiboDesc()
 * @method bool isBoolPersist()
 * @method bool isShareDesc()
 * @method bool isShareImageUrl()
 * @method bool isShareQrcodeUrl()
 * @method bool isShareTitle()
 * @method bool isShareTitleMyself()
 * @method bool isShareTitleOther()
 * @method bool isShareUrl()
 * @method bool isShareWeiboDesc()
 * @method $this setBoolPersist(int $value)
 * @method $this setShareDesc(string $value)
 * @method $this setShareImageUrl(ImageUrl $value)
 * @method $this setShareQrcodeUrl(ImageUrl $value)
 * @method $this setShareTitle(string $value)
 * @method $this setShareTitleMyself(string $value)
 * @method $this setShareTitleOther(string $value)
 * @method $this setShareUrl(string $value)
 * @method $this setShareWeiboDesc(string $value)
 * @method $this unsetBoolPersist()
 * @method $this unsetShareDesc()
 * @method $this unsetShareImageUrl()
 * @method $this unsetShareQrcodeUrl()
 * @method $this unsetShareTitle()
 * @method $this unsetShareTitleMyself()
 * @method $this unsetShareTitleOther()
 * @method $this unsetShareUrl()
 * @method $this unsetShareWeiboDesc()
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
