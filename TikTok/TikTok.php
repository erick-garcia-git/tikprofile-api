<?php

namespace TikTokAPI;

class TikTok
{
    /**
     * Debug.
     *
     * @var bool
     */
    public $debug;

    /**
     * Storage path.
     *
     * @var string
     */
    public $storagePath;

    /**
     * Settings interface.
     *
     * @var \InstagramAPI\Settings
     */
    public $settings;

    /**
     * Auth key.
     *
     * @var string
     */
    public $authKey = '';

    /**
     * Proxy.
     *
     * @var string
     */
    public $proxy = null;

    /**
     * Timezone.
     *
     * @var string
     */
    public $timezone = null;

    /**
     * Timezone offset.
     *
     * @var int
     */
    public $timezoneOffset = null;


    /**
     * TikTok API constructor.
     *
     * @param bool   $debug       Enables debug mode.
     * @param string $storagePath Storage path. The path where sessions
     *                            will be stored.
     */
    public function __construct(
        $debug = false,
        $storagePath = null)
    {
        $this->debug = $debug;
        $this->settings = new Settings($storagePath);
    }

    /**
     * Sets the active user.
     *
     * @param string $authKey Private API service auth key.
     */
    public function setAuthKey(
        $authKey)
    {
        $this->authKey = $authKey;
    }

    /**
     * Sets the active user.
     *
     * @param string $proxy Proxy.
     */
    public function setProxy(
        $proxy)
    {
        $this->proxy = $proxy;
    }

    /**
     * Sets timezone.
     *
     * Example: US/Chicago.
     *
     * @param string $value The timezone.
     */
    public function setTimezone(
        $timezone)
    {
        $this->timezone = $timezone;
    }

    /**
     * Get timezone.
     *
     * @return string.
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Sets timezone offset.
     *
     * @param int $value The timezone.
     */
    public function setTimezoneOffset(
        $timezoneOffset)
    {
        $this->timezoneOffset = $timezoneOffset;
    }

    /**
     * Get timezone offset.
     *
     * @return string.
     */
    public function getTimezoneOffset()
    {
        return $this->timezoneOffset;
    }

    /**
     * Sets the active user.
     *
     * @param string $username   Username.
     * @param array  $deviceInfo Device information: device_id, openudid and iid.
     * @param mixed  $user
     */
    public function setUser(
        $user,
        $deviceInfo = null)
    {
        $this->settings->setUser($user);

        if ($this->settings->get('openudid') === null || $this->settings->get('iid') === null || $this->settings->get('device_id') === null) {
            if ($deviceInfo === null) {
                $deviceInfo = $this->getDeviceRegistrationIds();
                $this->settings->set('openudid', $deviceInfo->getOpenudid());
                $this->settings->set('iid', $deviceInfo->getInstallId());
                $this->settings->set('device_id', $deviceInfo->getDeviceId());
            } else {
                $this->settings->set('openudid', $deviceInfo['openudid']);
                $this->settings->set('iid', $deviceInfo['iid']);
                $this->settings->set('device_id', $deviceInfo['device_id']);
            }
        }
    }

    /**
     * Get device registration IDs.
     *
     * NOTE: This data is obtained from the private subscription.
     *
     * @throws \TikTokAPI\Exception\AuthkeyException
     *
     * @return \TikTokAPI\Response\DeviceRegistrationIdsResponse
     */
    public function getDeviceRegistrationIds()
    {
        if ($this->authKey === '') {
            throw new \TikTokAPI\Exception\AuthkeyException('Auth key not provided');
        }

        $response = $this->request('/devices')
            ->skip(true)
            ->setBase(100)
            ->setDisableDefaultParams(true)
            ->addPost('authkey', $this->authKey)
            ->getResponse();

        return new Response\DeviceRegistrationIdsResponse($response);
    }

    /**
     * Get captcha.
     *
     * @param string $code Error code from login response.
     *
     * @throws Exception
     *
     * @return \TikTokAPI\Response\GetCaptchaResponse
     */
    public function getCaptcha(
        $code)
    {
        $response = $this->request('/get')
            ->setBase(2)
            ->skip(true)
            ->setDisableDefaultParams(true)
            ->addParam('aid', 1233)
            ->addParam('lang', 'en')
            ->addParam('app_name', 'musical_ly')
            ->addParam('iid', $this->settings->get('iid'))
            ->addParam('vc', Constants::VERSION_CODE)
            ->addParam('did', $this->settings->get('device_id'))
            ->addParam('ch', Constants::CHANNEL)
            ->addParam('os', 0)
            ->addParam('challenge_code', $code)
            ->getResponse();

        return new Response\GetCaptchaResponse($response);
    }

    /**
     * Solve captcha.
     *
     * NOTE: This uses the private API subscription to solve captchas.
     *
     * @param string $id   Captcha ID.
     * @param string $url1 Captcha URL 1.
     * @param string $url2 Captcha URL 2.
     * @param string $posY Y Position.
     *
     * @return \TikTokAPI\Response\SolveCaptchaResponse
     */
    public function solveCaptcha(
        $id,
        $url1,
        $url2,
        $posY)
    {
        $response = $this->request('/captcha')
            ->setBase(200)
            ->skip(true)
            ->setDisableDefaultParams(true)
            ->addPost('url1', $url1)
            ->addPost('url2', $url2)
            ->addPost('id', $id)
            ->addPost('tip_y', $posY)
            ->addPost('authkey', $this->authKey)
            ->getResponse();

        return new Response\SolveCaptchaResponse($response);
    }

    /**
     * Verify captcha solution.
     *
     * @param SolveCaptchaResponse $captchaSolution Captcha solution.
     *
     * @return \TikTokAPI\Response\GetCaptchaResponse
     */
    public function verifyCaptcha(
        $captchaSolution)
    {
        $response = $this->request('/verify')
            ->setBase(2)
            ->skip(true)
            ->setDisableDefaultParams(true)
            ->addParam('aid', 1233)
            ->addParam('lang', 'en')
            ->addParam('app_name', 'musical_ly')
            ->addParam('iid', $this->settings->get('iid'))
            ->addParam('vc', Constants::VERSION_CODE)
            ->addParam('did', $this->settings->get('device_id'))
            ->addParam('ch', 'googleplay')
            ->addParam('os', 0)
            ->addParam('challenge_code', '1105')
            ->addPost('modified_img_width', $captchaSolution->getModifiedImgWidth())
            ->addPost('id', $captchaSolution->getId())
            ->addPost('mode', 'slide')
            ->addPost('reply', $captchaSolution->getReply())
            ->getResponse();

        return new Response\GetCaptchaResponse($response);
    }

    /**
     * Check if email is registered.
     *
     * @param string $email Email.
     *
     * @return \TikTokAPI\Response\CheckEmailResponse
     */
    public function checkEmail(
        $email)
    {
        $response = $this->request('/passport/user/check_email_registered')
            ->setBase(1)
            ->setEncoding('urlencode')
            ->addPost('mix_mode', 1)
            ->addPost('email', Signatures::xorEncrypt($email))
            ->addPost('account_sdk_source', 'app')
            ->getResponse();

        return new Response\CheckEmailResponse($response);
    }

    /**
     * Login.
     *
     * @param string $username   It can be either a username, email or phone number.
     * @param string $password   The password of the account.
     * @param array  $deviceInfo Device information: device_id, openudid and iid.
     *
     * @return \TikTokAPI\Response\LoginResponse
     */
    public function login(
        $username,
        $password,
        $deviceInfo = null)
    {
        $this->setUser($username, $deviceInfo);

        $request = $this->request('/passport/user/login/')
            ->setBase(1)
            ->setEncoding('urlencode')
            ->addPost('password', Signatures::xorEncrypt($password))
            ->addPost('account_sdk_source', 'app')
            ->addPost('mix_mode', 1)
            ->addPost('multi_login', 1);

        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $response = $request->addPost('email', Signatures::xorEncrypt($username))
                                ->getResponse();
        } else {
            $response = $request->addPost('username', Signatures::xorEncrypt($username))
                                ->getResponse();
        }

        return new Response\LoginResponse($response);
    }

    /**
     * Get main feed.
     *
     * @param int $maxCursor Max cursor. Used for pagination.
     *
     * @return \TikTokAPI\Response\FeedResponse
     */
    public function getFeed(
        $maxCursor = 0)
    {
        $response = $this->request('/aweme/v1/feed/')
            ->setBase(1)
            ->addParam('max_cursor', $maxCursor)
            ->addParam('count', 20)
            ->getResponse();

        return new Response\FeedResponse($response);
    }

    /**
     * Get user feed.
     *
     * @param string $secUserId Sec user ID.
     * @param int    $maxCursor Max cursor. Used for pagination.
     *
     * @return \TikTokAPI\Response\FeedResponse
     */
    public function getUserFeed(
        $secUserId,
        $maxCursor = 0)
    {
        $response = $this->request('/aweme/v1/aweme/post/')
            ->setBase(1)
            ->addParam('source', 0)
            ->addParam('max_cursor', $maxCursor)
            ->addParam('count', 20)
            ->addParam('sec_user_id', $secUserId)
            ->getResponse();

        return new Response\FeedResponse($response);
    }

    /**
     * Like media.
     *
     * @param string $media   ID  Media ID. Aweme ID.
     * @param mixed  $mediaId
     *
     * @return \TikTokAPI\Response\LikeResponse
     */
    public function like(
        $mediaId)
    {
        $response = $this->request('/aweme/v1/commit/item/digg/')
            ->setBase(1)
            ->addParam('aweme_id', $mediaId)
            ->addParam('type', 1)
            ->getResponse();

        return new Response\LikeResponse($response);
    }

    /**
     * Follow user.
     *
     * @param string $secUserId Sec user ID.
     * @param int    $channelId For users, channel ID is always 3.
     *
     * @return \TikTokAPI\Response\FollowResponse
     */
    public function follow(
        $secUserId,
        $channelId = 3)
    {
        $response = $this->request('/aweme/v1/commit/follow/user/')
            ->setBase(1)
            ->addParam('from', 0)
            ->addParam('from_pre', -1)
            ->addParam('type', 1)
            ->addParam('channel_id', $channelId)
            ->addParam('sec_user_id', $secUserId)
            ->getResponse();

        return new Response\LikeResponse($response);
    }

    /**
     * Get user profile information.
     *
     * @param string $secUserId Sec user ID.
     *
     * @return \TikTokAPI\Response\ProfileResponse
     */
    public function getUserProfile(
        $secUserId)
    {
        $response = $this->request('/aweme/v1/user/profile/other/')
            ->setBase(1)
            ->addParam('allow_sell_data', 0)
            ->addParam('content_language', '')
            ->addParam('address_book_access', 0)
            ->addParam('sec_user_id', $secUserId)
            ->getResponse();

        return new Response\ProfileResponse($response);
    }

    /**
     * Get self profile information.
     *
     * @return \TikTokAPI\Response\ProfileResponse
     */
    public function getSelfProfile()
    {
        $response = $this->request('/aweme/v1/user/profile/self/')
            ->setBase(1)
            ->addParam('is_after_login', 0)
            ->getResponse();

        return new Response\ProfileResponse($response);
    }

    /**
     * Publish a comment.
     *
     * @param string $mediaId Media ID. Aweme ID.
     * @param string $text    Comment text.
     *
     * @return \TikTokAPI\Response\CommentResponse
     */
    public function comment(
        $mediaId,
        $text)
    {
        $response = $this->request('/aweme/v1/comment/publish/')
            ->setBase(1)
            ->setEncoding('urlencode')
            ->addPost('aweme_id', $mediaId)
            ->addPost('text', $text)
            ->addPost('text_extra', [])
            ->addPost('is_self_see', 0)
            ->addPost('sticker_id', 0)
            ->addPost('sticker_source', 0)
            ->addPost('sticker_width', 0)
            ->addPost('sticker_height', 0)
            ->addPost('channel_id', 0)
            ->addPost('city', '')
            ->getResponse();

        return new Response\CommentResponse($response);
    }

    /**
     * View post.
     *
     * This function increments the viewer counter.
     *
     * @param string $mediaId Media ID. Aweme ID.
     *
     * @return \TikTokAPI\Response\ViewPostResponse
     */
    public function viewPost(
        $mediaId)
    {
        $response = $this->request('/aweme/v1/aweme/stats/')
            ->setBase(1)
            ->setEncoding('urlencode')
            ->addPost('first_install_time', $installTime)
            ->addPost('action_time', time())
            ->addPost('tab_type', 0)
            ->addPost('item_id', $mediaId)
            ->addPost('play_delta', 1)
            ->addPost('aweme_type', 0)
            ->getResponse();

        return new Response\ViewPostResponse($response);
    }

    /**
     * Get trending content.
     *
     * Popular content in the main search windows.
     *
     * @return \TikTokAPI\Response\TrendingContentResponse
     */
    public function getTrendingContent()
    {
        $response = $this->request('/aweme/v2/category/list/')
            ->setBase(1)
            ->getResponse();

        return new Response\TrendingContentResponse($response);
    }

    /**
     * Search.
     *
     * This searches by a query in 'Top' section.
     *
     * @param string $query  The query.
     * @param int    $offset Offset. User for pagination.
     * @param int    $count  Count. Number of items returned by TikTok.
     *
     * @return \TikTokAPI\Response\SearchResponse
     */
    public function search(
        $query,
        $offset = 0,
        $count = 10)
    {
        $response = $this->_prepareSearch('/aweme/v1/general/search/single/', $query, $count)
            ->addPost('offset', $offset)
            ->addPost('search_source', 'search_sug')
            ->addPost('latitude', '0.0')
            ->addPost('longitude', '0.0')
            ->getResponse();

        return new Response\SearchResponse($response);
    }

    /**
     * Search user.
     *
     * This searches by a query in 'Users' section.
     *
     * @param string $query  The query.
     * @param int    $offset Offset. User for pagination.
     * @param int    $count  Count. Number of items returned by TikTok.
     *
     * @return \TikTokAPI\Response\SearchResponse
     */
    public function searchHashtag(
        $query,
        $offset = 0,
        $count = 20)
    {
        $response = $this->_prepareSearch('/aweme/v1/challenge/search/', $query, $count)
            ->addPost('offset', $offset)
            ->addPost('search_source', 'challenge')
            ->addPost('search_id', '')
            ->getResponse();

        return new Response\SearchResponse($response);
    }

    /**
     * Search video.
     *
     * This searches by a query in 'Videos' section.
     *
     * @param string $query  The query.
     * @param int    $offset Offset. User for pagination.
     * @param int    $count  Count. Number of items returned by TikTok.
     *
     * @return \TikTokAPI\Response\SearchResponse
     */
    public function searchVideo(
        $query,
        $offset = 0,
        $count = 20)
    {
        $response = $this->_prepareSearch('/aweme/v1/search/item/', $query, $count)
            ->addPost('offset', $offset)
            ->addPost('source', 'video_search')
            ->addPost('search_id', '')
            ->addPost('is_filter_search', 0)
            ->addPost('sort_type', 0)
            ->addPost('publish_time', 0)
            ->getResponse();

        return new Response\SearchResponse($response);
    }

    /**
     * Prepare search request.
     *
     * @param string $endpoint Search endpoint.
     * @param string $query    The query.
     * @param int    $count    Count. Number of items returned by TikTok.
     *
     * @return \TikTokAPI\Request
     */
    protected function _prepareSearch(
        $endpoint,
        $query,
        $count)
    {
        return $this->request($endpoint)
            ->setBase(1)
            ->setEncoding('urlencode')
            ->addPost('keyword', $query)
            ->addPost('count', $count)
            ->addPost('is_pull_refresh', 1)
            ->addPost('hot_search', 0)
            ->addPost('query_correct_type', 1);
    }

    /**
     * Get hashtag feed.
     *
     * @param string $channelId Channel ID. Hashtag ID.
     * @param int    $cursor    Max cursor. Used for pagination.
     * @param int    $count     Count. Number of items returned by TikTok.
     *
     * @return \TikTokAPI\Response\FeedResponse
     */
    public function getHashtagFeed(
        $channelId,
        $cursor = 0,
        $count = 20)
    {
        $response = $this->request('/aweme/v1/challenge/aweme/')
            ->setBase(1)
            ->addParam('cursor', $cursor)
            ->addParam('ch_id', $channelId)
            ->addParam('count', $count)
            ->addParam('query_type', 0)
            ->addParam('source', 'challenge')
            ->addParam('type', 5)
            ->getResponse();

        return new Response\FeedResponse($response);
    }

    /**
     * Get following list.
     *
     * @param string $channelId Channel ID. Hashtag ID.
     * @param int    $cursor    Max cursor. Used for pagination.
     * @param int    $count     Count. Number of items returned by TikTok.
     * @param mixed  $userId
     * @param mixed  $secUserId
     * @param mixed  $offset
     *
     * @return \TikTokAPI\Response\FollowerAndFollowingListResponse
     */
    public function getFollowingList(
        $userId,
        $secUserId,
        $count = 20,
        $offset = 0)
    {
        $response = $this->request('/aweme/v1/user/following/list/')
            ->setBase(1)
            ->addParam('user_id', $userId)
            ->addParam('sec_user_id', $secUserId)
            ->addParam('max_time', 0)
            ->addParam('count', $count)
            ->addParam('offset', $offset)
            ->addParam('source_type', 2)
            ->addParam('address_book_access', 2)
            ->addParam('gps_access', 2)
            ->getResponse();

        return new Response\FollowerAndFollowingListResponse($response);
    }

    /**
     * Get follower list.
     *
     * @param string $channelId Channel ID. Hashtag ID.
     * @param int    $cursor    Max cursor. Used for pagination.
     * @param int    $count     Count. Number of items returned by TikTok.
     * @param mixed  $userId
     * @param mixed  $secUserId
     * @param mixed  $offset
     *
     * @return \TikTokAPI\Response\FollowerAndFollowingListResponse
     */
    public function getFollowerList(
        $userId,
        $secUserId,
        $count = 20,
        $offset = 0)
    {
        $response = $this->request('/aweme/v1/user/follower/list/')
            ->setBase(1)
            ->addParam('user_id', $userId)
            ->addParam('sec_user_id', $secUserId)
            ->addParam('max_time', 0)
            ->addParam('count', $count)
            ->addParam('offset', $offset)
            ->addParam('source_type', 2)
            ->addParam('address_book_access', 2)
            ->addParam('gps_access', 2)
            ->getResponse();

        return new Response\FollowerAndFollowingListResponse($response);
    }

    /**
     * Get account activity.
     *
     * @param int $maxTime     Max time. Timestamp for filtering activity.
     * @param int $minTime     Min time. Timestamp for filtering activity.
     * @param int $count       Count. Number of items returned by TikTok.
     * @param int $noticeGroup Notice gorup.
     *
     * @return \TikTokAPI\Response\ActivityResponse
     */
    public function getActivity(
        $maxTime = 0,
        $minTime = 0,
        $count = 20,
        $noticeGroup = 36)
    {
        $response = $this->request('/aweme/v1/notice/list/message/')
            ->setBase(1)
            ->addParam('max_time', $maxTime)
            ->addParam('min_time', $minTime)
            ->addParam('count', $count)
            ->addParam('notice_group', $noticeGroup)
            ->addParam('is_mark_read', 1)
            ->getResponse();

        return new Response\ActivityResponse($response);
    }

    /**
     * Create a custom API request.
     *
     * Used internally, but can also be used by end-users if they want
     * to create completely custom API queries without modifying this library.
     *
     * @param string $endpoint
     *
     * @throws \TikTokAPI\Exception\AuthkeyException
     *
     * @return \TikTokAPI\Request
     */
    public function request(
        $endpoint = '')
    {
        if ($this->authKey === '') {
            throw new \TikTokAPI\Exception\AuthkeyException('Auth key not provided.');
        }

        if ($this->settings->getUsernameStoragePath() === null) {
            throw new \TikTokAPI\Exception\TikTokAPIException('User was not set, please call setUser().');
        }

        return new Request($this, $endpoint);
    }
}
