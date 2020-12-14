<?php

namespace TikTokAPI;

class Request
{
    protected $_parent = null;
    protected $_http = null;
    protected $_url = null;
    protected $_endpoint = null;
    protected $_base = 0;
    protected $_posts = null;
    protected $_params = null;
    protected $_headers = null;
    protected $_payload = null;
    protected $_encoding = 'json';
    protected $_skip = false;
    protected $_random = 0;
    protected $_disableDefaultParams = false;

    public function __construct(
        $parent,
        $endpoint)
    {
        $this->_parent = $parent;
        $this->_http = new HttpInterface($this->_parent);
        $this->_endpoint = $endpoint;
        $this->addBasicHeaders();
    }

    /**
     * Add query param to request, overwriting any previous value.
     *
     * @param string $key
     * @param mixed  $value
     *
     * @return self
     */
    public function addParam(
        $key,
        $value)
    {
        if ($value === true) {
            $value = 'true';
        } elseif ($value === false) {
            $value = 'false';
        }
        $this->_params[$key] = $value;

        return $this;
    }

    public function getParams()
    {
        return $this->_params;
    }

    /**
     * Add POST param to request, overwriting any previous value.
     *
     * @param string $key
     * @param mixed  $value
     *
     * @return self
     */
    public function addPost(
        $key,
        $value)
    {
        if ($value === true) {
            $value = 'true';
        } elseif ($value === false) {
            $value = 'false';
        }
        $this->_posts[$key] = $value;

        return $this;
    }

    public function setPayload(
        $payload)
    {
        $this->_payload = $payload;

        return $this;
    }

    public function getPayload()
    {
        return $this->_payload;
    }

    public function getPosts()
    {
        return $this->_posts;
    }

    public function addDefaultParams()
    {
        $this
        ->addParam('account_sdk_version', Constants::SDK_VERSION)
        ->addParam('_rticket', strval(round(microtime(true) * 1000)))
        ->addParam('app_language', Constants::LANGUAGE)
        ->addParam('app_type', Constants::APP_TYPE)
        ->addParam('iid', $this->_parent->settings->get('iid'))
        ->addParam('channel', Constants::CHANNEL)
        ->addParam('language', Constants::LANGUAGE)
        ->addParam('locale', Constants::LANGUAGE)
        ->addParam('os_version', Constants::OS_VERSION)
        ->addParam('os_api', Constants::OS_API)
        ->addParam('resolution', Constants::RESOLUTION)
        ->addParam('dpi', Constants::DPI)
        ->addParam('openudid', $this->_parent->settings->get('openudid'))
        ->addParam('uoo', 0)
        ->addParam('is_my_cn', 1)
        ->addParam('ac', 'wifi')
        ->addParam('ac2', 'wifi5g')
        ->addParam('pass-route', 1)
        ->addParam('carrier_region', Constants::REGION)
        ->addParam('carrier_region_v2', 310)
        ->addParam('mcc_mnc', 310260)
        ->addParam('timezone_name', ($this->_parent->getTimezone() !== null) ? $this->_parent->getTimezone() : 'US/Chicago')
        ->addParam('timezone_offset', ($this->_parent->getTimezoneOffset() !== null) ? $this->_parent->getTimezoneOffset() : -21600)
        ->addParam('app_name', Constants::APP_NAME)
        ->addParam('ab_version', Constants::TIKTOK_VERSION)
        ->addParam('version_name', Constants::TIKTOK_VERSION)
        ->addParam('build_number', Constants::TIKTOK_VERSION)
        ->addParam('update_version_code', Constants::VERSION_CODE)
        ->addParam('manifest_version_code', Constants::VERSION_CODE)
        ->addParam('version_code', Constants::BUILD_VERSION)
        ->addParam('device_platform', Constants::PLATFORM)
        ->addParam('device_brand', Constants::DEVICE_BRAND)
        ->addParam('device_type', Constants::DEVICE_TYPE)
        ->addParam('device_id', $this->_parent->settings->get('device_id'))
        ->addParam('ssmix', 'a')
        ->addParam('pass-region', 1)
        ->addParam('region', Constants::REGION)
        ->addParam('sys_region', Constants::REGION)
        ->addParam('aid', '1233')
        ->addParam('ts', strval(time()))
        ->addParam('residence', Constants::REGION)
        ->addParam('current_region', Constants::REGION);
    }

    public function addHeader(
        $key,
        $value)
    {
        $this->_headers[$key] = $value;

        return $this;
    }

    public function addBasicHeaders()
    {
        $this
            ->addHeader('User-Agent', Constants::USER_AGENT)
            ->addHeader('sdk-version', 1)
            ->addHeader('Accept-Encoding', 'gzip, deflate');
    }

    public function getHeaders(
        $keyValueArray = false)
    {
        if ($keyValueArray === false) {
            $headers = [];
            foreach ($this->_headers as $key => $value) {
                $headers[] = sprintf('%s: %s', $key, $value);
            }

            return $headers;
        } else {
            return $this->_headers;
        }
    }

    public function setBase(
        $index)
    {
        $this->_base = $index;
        if ($this->_base === 100) {
            $this->_random = array_rand(Constants::DEVICE_REGISTRATION);
        } elseif ($this->_base === 200) {
            $this->_random = array_rand(Constants::CAPTCHA_SOLVER);
        }

        return $this;
    }

    public function getUrl()
    {
        if ($this->_base === 100) {
            return Constants::DEVICE_REGISTRATION[$this->_random].$this->_endpoint;
        } elseif ($this->_base === 200) {
            return Constants::CAPTCHA_SOLVER[$this->_random].$this->_endpoint;
        } elseif ($this->_base === 10) {
            return $this->_endpoint;
        } else {
            return Constants::TIKTOK_API[$this->_base].$this->_endpoint;
        }
    }

    public function setEncoding(
        $encoding)
    {
        $this->_encoding = $encoding;

        return $this;
    }

    public function skip(
        $bool = false)
    {
        $this->_skip = $bool;

        return $this;
    }

    public function getSkip()
    {
        return $this->_skip;
    }

    public function getEncoding()
    {
        return $this->_encoding;
    }

    public function setDisableDefaultParams(
        $bool)
    {
        $this->_disableDefaultParams = $bool;

        return $this;
    }

    public function getDisableDefaultParams()
    {
        return $this->_disableDefaultParams;
    }

    public function getBody()
    {
        if ($this->getEncoding() === 'json') {
            return json_encode($this->getPosts());
        } elseif ($this->getEncoding() === 'urlencode') {
            return http_build_query($this->getPosts());
        } elseif ($this->getEncoding() === 'raw') {
            return $this->_payload;
        }
    }

    public function getResponse()
    {
        if ($this->getDisableDefaultParams() === false) {
            $this->addDefaultParams();
        }

        return $this->_http->sendRequest($this);
    }
}
