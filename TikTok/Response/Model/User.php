<?php

namespace TikTokAPI\Response\Model;

use TikTokAPI\AutoPropertyMapper;

/**
 * User.
 *
 * @method mixed getAdCoverUrl()
 * @method int getAppleAccount()
 * @method ImageUrl getAvatarLarger()
 * @method ImageUrl getAvatarMedium()
 * @method ImageUrl getAvatarThumb()
 * @method ImageUrl getAvatar_168x168()
 * @method ImageUrl getAvatar_300x300()
 * @method int getAwemeCount()
 * @method string getBirthday()
 * @method int getBirthdayHideLevel()
 * @method mixed getChaList()
 * @method mixed getCity()
 * @method mixed getCommerceUserInfo()
 * @method int getCommerceUserLevel()
 * @method mixed getCountry()
 * @method ImageUrl[] getCoverUrl()
 * @method mixed getCustomVerify()
 * @method mixed getDistrict()
 * @method int getDongtaiCount()
 * @method mixed getEnterpriseVerifyReason()
 * @method int getFavoritingCount()
 * @method int getFollowStatus()
 * @method int getFollowerCount()
 * @method int getFollowerStatus()
 * @method mixed getFollowersDetail()
 * @method int getFollowingCount()
 * @method int getForwardCount()
 * @method int getGender()
 * @method mixed getGeofencing()
 * @method bool getHasUnreadStory()
 * @method mixed getHomepageBottomToast()
 * @method string getInsId()
 * @method bool getIsActivityUser()
 * @method bool getIsBlocked()
 * @method bool getIsEffectArtist()
 * @method bool getIsStar()
 * @method bool getIsVerified()
 * @method mixed getIsoCountryCode()
 * @method mixed getItemList()
 * @method bool getLiveCommerce()
 * @method mixed getLocation()
 * @method bool getMessageChatEntry()
 * @method int getMplatformFollowersCount()
 * @method mixed getNeedPoints()
 * @method mixed getNewStoryCover()
 * @method string getNickname()
 * @method MusicianData getOriginalMusician()
 * @method mixed getPlatformSyncInfo()
 * @method int getProfileTabType()
 * @method mixed getProvince()
 * @method mixed getRecommendReasonRelation()
 * @method int getRecommendUserReasonSource()
 * @method mixed getRelativeUsers()
 * @method int getRoomId()
 * @method string getSecUid()
 * @method int getSecret()
 * @method ShareInfo getShareInfo()
 * @method string getShortId()
 * @method bool getShowFavoriteList()
 * @method string getSignatureLanguage()
 * @method int getSyncToToutiao()
 * @method mixed getTabSettings()
 * @method int getTotalFavorited()
 * @method mixed getTwitterId()
 * @method mixed getTwitterName()
 * @method mixed getTypeLabel()
 * @method string getUid()
 * @method string getUniqueId()
 * @method int getVerificationType()
 * @method mixed getVideoCover()
 * @method ImageUrl getVideoIcon()
 * @method int getWatchStatus()
 * @method mixed getWeiboVerify()
 * @method mixed getWithCommerceEnterpriseTabEntry()
 * @method bool getWithCommerceEntry()
 * @method bool getWithFusionShopEntry()
 * @method bool getWithNewGoods()
 * @method mixed getYoutubeChannelId()
 * @method mixed getYoutubeChannelTitle()
 * @method bool isAdCoverUrl()
 * @method bool isAppleAccount()
 * @method bool isAvatarLarger()
 * @method bool isAvatarMedium()
 * @method bool isAvatarThumb()
 * @method bool isAvatar_168x168()
 * @method bool isAvatar_300x300()
 * @method bool isAwemeCount()
 * @method bool isBirthday()
 * @method bool isBirthdayHideLevel()
 * @method bool isChaList()
 * @method bool isCity()
 * @method bool isCommerceUserInfo()
 * @method bool isCommerceUserLevel()
 * @method bool isCountry()
 * @method bool isCoverUrl()
 * @method bool isCustomVerify()
 * @method bool isDistrict()
 * @method bool isDongtaiCount()
 * @method bool isEnterpriseVerifyReason()
 * @method bool isFavoritingCount()
 * @method bool isFollowStatus()
 * @method bool isFollowerCount()
 * @method bool isFollowerStatus()
 * @method bool isFollowersDetail()
 * @method bool isFollowingCount()
 * @method bool isForwardCount()
 * @method bool isGender()
 * @method bool isGeofencing()
 * @method bool isHasUnreadStory()
 * @method bool isHomepageBottomToast()
 * @method bool isInsId()
 * @method bool isIsActivityUser()
 * @method bool isIsBlocked()
 * @method bool isIsEffectArtist()
 * @method bool isIsStar()
 * @method bool isIsVerified()
 * @method bool isIsoCountryCode()
 * @method bool isItemList()
 * @method bool isLiveCommerce()
 * @method bool isLocation()
 * @method bool isMessageChatEntry()
 * @method bool isMplatformFollowersCount()
 * @method bool isNeedPoints()
 * @method bool isNewStoryCover()
 * @method bool isNickname()
 * @method bool isOriginalMusician()
 * @method bool isPlatformSyncInfo()
 * @method bool isProfileTabType()
 * @method bool isProvince()
 * @method bool isRecommendReasonRelation()
 * @method bool isRecommendUserReasonSource()
 * @method bool isRelativeUsers()
 * @method bool isRoomId()
 * @method bool isSecUid()
 * @method bool isSecret()
 * @method bool isShareInfo()
 * @method bool isShortId()
 * @method bool isShowFavoriteList()
 * @method bool isSignatureLanguage()
 * @method bool isSyncToToutiao()
 * @method bool isTabSettings()
 * @method bool isTotalFavorited()
 * @method bool isTwitterId()
 * @method bool isTwitterName()
 * @method bool isTypeLabel()
 * @method bool isUid()
 * @method bool isUniqueId()
 * @method bool isVerificationType()
 * @method bool isVideoCover()
 * @method bool isVideoIcon()
 * @method bool isWatchStatus()
 * @method bool isWeiboVerify()
 * @method bool isWithCommerceEnterpriseTabEntry()
 * @method bool isWithCommerceEntry()
 * @method bool isWithFusionShopEntry()
 * @method bool isWithNewGoods()
 * @method bool isYoutubeChannelId()
 * @method bool isYoutubeChannelTitle()
 * @method $this setAdCoverUrl(mixed $value)
 * @method $this setAppleAccount(int $value)
 * @method $this setAvatarLarger(ImageUrl $value)
 * @method $this setAvatarMedium(ImageUrl $value)
 * @method $this setAvatarThumb(ImageUrl $value)
 * @method $this setAvatar_168x168(ImageUrl $value)
 * @method $this setAvatar_300x300(ImageUrl $value)
 * @method $this setAwemeCount(int $value)
 * @method $this setBirthday(string $value)
 * @method $this setBirthdayHideLevel(int $value)
 * @method $this setChaList(mixed $value)
 * @method $this setCity(mixed $value)
 * @method $this setCommerceUserInfo(mixed $value)
 * @method $this setCommerceUserLevel(int $value)
 * @method $this setCountry(mixed $value)
 * @method $this setCoverUrl(ImageUrl[] $value)
 * @method $this setCustomVerify(mixed $value)
 * @method $this setDistrict(mixed $value)
 * @method $this setDongtaiCount(int $value)
 * @method $this setEnterpriseVerifyReason(mixed $value)
 * @method $this setFavoritingCount(int $value)
 * @method $this setFollowStatus(int $value)
 * @method $this setFollowerCount(int $value)
 * @method $this setFollowerStatus(int $value)
 * @method $this setFollowersDetail(mixed $value)
 * @method $this setFollowingCount(int $value)
 * @method $this setForwardCount(int $value)
 * @method $this setGender(int $value)
 * @method $this setGeofencing(mixed $value)
 * @method $this setHasUnreadStory(bool $value)
 * @method $this setHomepageBottomToast(mixed $value)
 * @method $this setInsId(string $value)
 * @method $this setIsActivityUser(bool $value)
 * @method $this setIsBlocked(bool $value)
 * @method $this setIsEffectArtist(bool $value)
 * @method $this setIsStar(bool $value)
 * @method $this setIsVerified(bool $value)
 * @method $this setIsoCountryCode(mixed $value)
 * @method $this setItemList(mixed $value)
 * @method $this setLiveCommerce(bool $value)
 * @method $this setLocation(mixed $value)
 * @method $this setMessageChatEntry(bool $value)
 * @method $this setMplatformFollowersCount(int $value)
 * @method $this setNeedPoints(mixed $value)
 * @method $this setNewStoryCover(mixed $value)
 * @method $this setNickname(string $value)
 * @method $this setOriginalMusician(MusicianData $value)
 * @method $this setPlatformSyncInfo(mixed $value)
 * @method $this setProfileTabType(int $value)
 * @method $this setProvince(mixed $value)
 * @method $this setRecommendReasonRelation(mixed $value)
 * @method $this setRecommendUserReasonSource(int $value)
 * @method $this setRelativeUsers(mixed $value)
 * @method $this setRoomId(int $value)
 * @method $this setSecUid(string $value)
 * @method $this setSecret(int $value)
 * @method $this setShareInfo(ShareInfo $value)
 * @method $this setShortId(string $value)
 * @method $this setShowFavoriteList(bool $value)
 * @method $this setSignatureLanguage(string $value)
 * @method $this setSyncToToutiao(int $value)
 * @method $this setTabSettings(mixed $value)
 * @method $this setTotalFavorited(int $value)
 * @method $this setTwitterId(mixed $value)
 * @method $this setTwitterName(mixed $value)
 * @method $this setTypeLabel(mixed $value)
 * @method $this setUid(string $value)
 * @method $this setUniqueId(string $value)
 * @method $this setVerificationType(int $value)
 * @method $this setVideoCover(mixed $value)
 * @method $this setVideoIcon(ImageUrl $value)
 * @method $this setWatchStatus(int $value)
 * @method $this setWeiboVerify(mixed $value)
 * @method $this setWithCommerceEnterpriseTabEntry(mixed $value)
 * @method $this setWithCommerceEntry(bool $value)
 * @method $this setWithFusionShopEntry(bool $value)
 * @method $this setWithNewGoods(bool $value)
 * @method $this setYoutubeChannelId(mixed $value)
 * @method $this setYoutubeChannelTitle(mixed $value)
 * @method $this unsetAdCoverUrl()
 * @method $this unsetAppleAccount()
 * @method $this unsetAvatarLarger()
 * @method $this unsetAvatarMedium()
 * @method $this unsetAvatarThumb()
 * @method $this unsetAvatar_168x168()
 * @method $this unsetAvatar_300x300()
 * @method $this unsetAwemeCount()
 * @method $this unsetBirthday()
 * @method $this unsetBirthdayHideLevel()
 * @method $this unsetChaList()
 * @method $this unsetCity()
 * @method $this unsetCommerceUserInfo()
 * @method $this unsetCommerceUserLevel()
 * @method $this unsetCountry()
 * @method $this unsetCoverUrl()
 * @method $this unsetCustomVerify()
 * @method $this unsetDistrict()
 * @method $this unsetDongtaiCount()
 * @method $this unsetEnterpriseVerifyReason()
 * @method $this unsetFavoritingCount()
 * @method $this unsetFollowStatus()
 * @method $this unsetFollowerCount()
 * @method $this unsetFollowerStatus()
 * @method $this unsetFollowersDetail()
 * @method $this unsetFollowingCount()
 * @method $this unsetForwardCount()
 * @method $this unsetGender()
 * @method $this unsetGeofencing()
 * @method $this unsetHasUnreadStory()
 * @method $this unsetHomepageBottomToast()
 * @method $this unsetInsId()
 * @method $this unsetIsActivityUser()
 * @method $this unsetIsBlocked()
 * @method $this unsetIsEffectArtist()
 * @method $this unsetIsStar()
 * @method $this unsetIsVerified()
 * @method $this unsetIsoCountryCode()
 * @method $this unsetItemList()
 * @method $this unsetLiveCommerce()
 * @method $this unsetLocation()
 * @method $this unsetMessageChatEntry()
 * @method $this unsetMplatformFollowersCount()
 * @method $this unsetNeedPoints()
 * @method $this unsetNewStoryCover()
 * @method $this unsetNickname()
 * @method $this unsetOriginalMusician()
 * @method $this unsetPlatformSyncInfo()
 * @method $this unsetProfileTabType()
 * @method $this unsetProvince()
 * @method $this unsetRecommendReasonRelation()
 * @method $this unsetRecommendUserReasonSource()
 * @method $this unsetRelativeUsers()
 * @method $this unsetRoomId()
 * @method $this unsetSecUid()
 * @method $this unsetSecret()
 * @method $this unsetShareInfo()
 * @method $this unsetShortId()
 * @method $this unsetShowFavoriteList()
 * @method $this unsetSignatureLanguage()
 * @method $this unsetSyncToToutiao()
 * @method $this unsetTabSettings()
 * @method $this unsetTotalFavorited()
 * @method $this unsetTwitterId()
 * @method $this unsetTwitterName()
 * @method $this unsetTypeLabel()
 * @method $this unsetUid()
 * @method $this unsetUniqueId()
 * @method $this unsetVerificationType()
 * @method $this unsetVideoCover()
 * @method $this unsetVideoIcon()
 * @method $this unsetWatchStatus()
 * @method $this unsetWeiboVerify()
 * @method $this unsetWithCommerceEnterpriseTabEntry()
 * @method $this unsetWithCommerceEntry()
 * @method $this unsetWithFusionShopEntry()
 * @method $this unsetWithNewGoods()
 * @method $this unsetYoutubeChannelId()
 * @method $this unsetYoutubeChannelTitle()
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
        'verification_type'                     => 'int',
        'video_icon'                            => 'ImageUrl',
        'district'                              => '',
    ];
}
