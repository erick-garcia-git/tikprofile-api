<?php

namespace App\TModels;

use TikTokAPI\AutoPropertyMapper;

/**
 * Class User
 * @package App\TModels
 *
 * @OA\Schema(
 *     schema="User",
 *     description="User model",
 *     title="User model",
 *     @OA\Property(
 *      property="has_unread_story",
 *      description="boolean"
 *     ),
 *     @OA\Property(
 *      property="uid",
 *      description="string"
 *     ),
 *     @OA\Property(
 *      property="avatar_thumb",
 *      description="Avatar thumbnail",
 *      ref="#/components/schemas/ImageUrl"
 *     ),
 *     @OA\Property(
 *      property="unique_id",
 *      description="Unique id",
 *      type="string"
 *     ),
 *     @OA\Property(
 *      property="type_label",
 *      description="Type label",
 *      ref="#/components/schemas/ImageUrl"
 *     ),
 *     @OA\Property(
 *      property="follower_status",
 *      description="status of follower",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="is_verified",
 *      description="Is verified?",
 *      type="boolean"
 *     ),
 *     @OA\Property(
 *      property="avatar_300x300",
 *      description="Avatar image 300x300",
 *      ref="#/components/schemas/ImageUrl"
 *     ),
 *     @OA\Property(
 *      property="avatar_larger",
 *      description="Larger avatar image",
 *      ref="#/components/schemas/ImageUrl"
 *     ),
 *     @OA\Property(
 *      property="secret",
 *      description="Secret code",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="cover_url",
 *      description="Cover image url",
 *      type="array",
 *      @OA\Items(
 *          ref="#/components/schemas/ImageUrl"
 *      )
 *     ),
 *     @OA\Property(
 *      property="sec_uid",
 *      description="User security id",
 *      type="string"
 *     ),
 *     @OA\Property(
 *      property="nickname",
 *      description="User nickname",
 *      type="string"
 *     ),
 *     @OA\Property(
 *      property="verification_type",
 *      description="Verification type",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="follow_status",
 *      description="Follow status",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="commerce_user_level",
 *      description="Commerce user level",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="with_new_goods",
 *      description="With new goods?",
 *      type="boolean"
 *     ),
 *     @OA\Property(
 *      property="is_blocked",
 *      description="User blocked?",
 *      type="boolean"
 *     ),
 *     @OA\Property(
 *      property="short_id",
 *      description="Short user id",
 *      type="string"
 *     ),
 *     @OA\Property(
 *      property="profile_tab_type",
 *      description="Profile tab type",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="favoriting_count",
 *      description="Favorite count",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="share_info",
 *      description="Sharing information",
 *      ref="#/components/schemas/ShareInfo"
 *     ),
 *     @OA\Property(
 *      property="apple_account",
 *      description="Apple account",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="signature_language",
 *      description="Signature language",
 *      type="string"
 *     ),
 *     @OA\Property(
 *      property="sync_to_toutiao",
 *      description="Synchronize to toutiao",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="birthday",
 *      description="Birthday",
 *      type="string"
 *     ),
 *     @OA\Property(
 *      property="following_count",
 *      description="Following count",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="follower_count",
 *      description="Follower count",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="birthday_hide_level",
 *      description="Hide birthday level",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="with_fusion_shop_entry",
 *      description="Has fusion shop entry?",
 *      type="boolean"
 *     ),
 *     @OA\Property(
 *      property="is_star",
 *      description="Is starred user?",
 *      type="boolean"
 *     ),
 *     @OA\Property(
 *      property="with_commerce_entry",
 *      description="With commerce entry?",
 *      type="boolean"
 *     ),
 *     @OA\Property(
 *      property="ins_id",
 *      description="",
 *      type="string"
 *     ),
 *     @OA\Property(
 *      property="gender",
 *      description="User gender",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="room_id",
 *      description="User room id",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="show_favorite_list",
 *      description="Show favorite list?",
 *      type="boolean"
 *     ),
 *     @OA\Property(
 *      property="message_chat_entry",
 *      description="Able to send chat message?",
 *      type="boolean"
 *     ),
 *     @OA\Property(
 *      property="dongtai_count",
 *      description="Dongtai count",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="is_effect_artist",
 *      description="Is effect artist?",
 *      type="boolean"
 *     ),
 *     @OA\Property(
 *      property="total_favorited",
 *      description="Total favorite count",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="original_musician",
 *      description="Original Musician",
 *      ref="#/components/schemas/MusicianData"
 *     ),
 *     @OA\Property(
 *      property="watch_status",
 *      description="Watch status",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="is_activity_user",
 *      description="Is activity user?",
 *      type="boolean"
 *     ),
 *     @OA\Property(
 *      property="recommend_user_reason_source",
 *      description="Recommend user reason?",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="forward_count",
 *      description="Forward count",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="avatar_medium",
 *      description="Avatar Medium",
 *      ref="#/components/schemas/ImageUrl"
 *     ),
 *     @OA\Property(
 *      property="mplatform_followers_count",
 *      description="",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="live_commerce",
 *      description="",
 *      type="boolean"
 *     ),
 *     @OA\Property(
 *      property="aweme_count",
 *      description="",
 *      type="integer"
 *     ),
 *     @OA\Property(
 *      property="video_icon",
 *      description="Video icon",
 *      ref="#/components/schemas/ImageUrl"
 *     )
 * )
 */
class User extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'has_unread_story'                      => 'bool',
        'uid'                                   => 'string',
        'avatar_thumb'                          => 'ImageUrl',
        'unique_id'                             => 'string',
        'item_list'                             => '',
        'avatar_168x168'                        => 'ImageUrl',
        'type_label'                            => '',
        'homepage_bottom_toast'                 => '',
        'weibo_verify'                          => '',
        'platform_sync_info'                    => '',
        'follower_status'                       => 'int',
        'new_story_cover'                       => '',
        'is_verified'                           => 'bool',
        'custom_verify'                         => '',
        'geofencing'                            => '',
        'avatar_300x300'                        => 'ImageUrl',
        'avatar_larger'                         => 'ImageUrl',
        'secret'                                => 'int',
        'cover_url'                             => 'ImageUrl[]',
        'need_points'                           => '',
        'relative_users'                        => '',
        'cha_list'                              => '',
        'sec_uid'                               => 'string',
        'nickname'                              => 'string',
        'verification_type'                     => 'int',
        'enterprise_verify_reason'              => '',
        'ad_cover_url'                          => '',
        'follow_status'                         => 'int',
        'followers_detail'                      => '',
        'commerce_user_level'                   => 'int',
        'with_new_goods'                        => 'bool',
        'commerce_user_info'                    => '',
        'video_cover'                           => '',
        'location'                              => '',
        'with_commerce_enterprise_tab_entry'    => '',
        'is_blocked'                            => 'bool',
        'short_id'                              => 'string',
        'youtube_channel_id'                    => '',
        'recommend_reason_relation'             => '',
        'profile_tab_type'                      => 'int',
        'favoriting_count'                      => 'int',
        'share_info'                            => 'ShareInfo',
        'apple_account'                         => 'int',
        'signature_language'                    => 'string',
        'sync_to_toutiao'                       => 'int',
        'twitter_id'                            => '',
        'city'                                  => '',
        'birthday'                              => 'string',
        'following_count'                       => 'int',
        'follower_count'                        => 'int',
        'birthday_hide_level'                   => 'int',
        'with_fusion_shop_entry'                => 'bool',
        'iso_country_code'                      => '',
        'is_star'                               => 'bool',
        'with_commerce_entry'                   => 'bool',
        'ins_id'                                => 'string',
        'country'                               => '',
        'gender'                                => 'int',
        'room_id'                               => 'int',
        'tab_settings'                          => '',
        'show_favorite_list'                    => 'bool',
        'message_chat_entry'                    => 'bool',
        'youtube_channel_title'                 => '',
        'dongtai_count'                         => 'int',
        'is_effect_artist'                      => 'bool',
        'custom_verify'                         => '',
        'total_favorited'                       => 'int',
        'original_musician'                     => 'MusicianData',
        'twitter_name'                          => '',
        'watch_status'                          => 'int',
        'province'                              => '',
        'is_activity_user'                      => 'bool',
        'recommend_user_reason_source'          => 'int',
        'forward_count'                         => 'int',
        'avatar_medium'                         => 'ImageUrl',
        'mplatform_followers_count'             => 'int',
        'live_commerce'                         => 'bool',
        'aweme_count'                           => 'int',
        'video_icon'                            => 'ImageUrl',
        'district'                              => '',
    ];
}
