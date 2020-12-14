<?php

namespace TikTokAPI\Response\Model;

use TikTokAPI\AutoPropertyMapper;

/**
 * UserList.
 *
 * @method mixed getEffects()
 * @method mixed getItems()
 * @method mixed getMixList()
 * @method mixed getMusics()
 * @method mixed getPosition()
 * @method mixed getUniqidPosition()
 * @method mixed getUserInfo()
 * @method bool isEffects()
 * @method bool isItems()
 * @method bool isMixList()
 * @method bool isMusics()
 * @method bool isPosition()
 * @method bool isUniqidPosition()
 * @method bool isUserInfo()
 * @method $this setEffects(mixed $value)
 * @method $this setItems(mixed $value)
 * @method $this setMixList(mixed $value)
 * @method $this setMusics(mixed $value)
 * @method $this setPosition(mixed $value)
 * @method $this setUniqidPosition(mixed $value)
 * @method $this setUserInfo(mixed $value)
 * @method $this unsetEffects()
 * @method $this unsetItems()
 * @method $this unsetMixList()
 * @method $this unsetMusics()
 * @method $this unsetPosition()
 * @method $this unsetUniqidPosition()
 * @method $this unsetUserInfo()
 */
class UserList extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'user_info'                 => '', //TODO
        'position'                  => '',
        'uniqid_position'           => '',
        'effects'                   => '',
        'musics'                    => '',
        'items'                     => '',
        'mix_list'                  => '',
    ];
}
