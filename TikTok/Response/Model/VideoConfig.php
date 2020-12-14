<?php

namespace TikTokAPI\Response\Model;

use TikTokAPI\AutoPropertyMapper;

/**
 * VideoConfig.
 *
 * @method string getAiCutAppKey()
 * @method string getAiCutAuthorization()
 * @method int getAliveMaxFailTime()
 * @method string getAppKey()
 * @method string getAuthorization()
 * @method int getBackupDNSParseType()
 * @method string getCaptionAppKey()
 * @method string getCaptionAuthorization()
 * @method float getCoverTime()
 * @method int getDataFlowTimeout()
 * @method bool getEnableClientNetworkJudgement()
 * @method int getEnableExternDNS()
 * @method int getEnableExternNet()
 * @method int getEnableHttps()
 * @method int getEnableMutitask()
 * @method int getEnablePostMethod()
 * @method int getEnableQuic()
 * @method int getEnableTTNetDNS()
 * @method bool getEnableTtUploaderEvState()
 * @method bool getEnableTtUploaderLogCallback()
 * @method string getFileHostName()
 * @method int getFileRetryCount()
 * @method bool getFileTryHttpsEnable()
 * @method int getIsStreamUploadEnable()
 * @method int getMainDNSParseType()
 * @method int getMaxFailTime()
 * @method bool getMaxFailTimeEnabled()
 * @method int getMaxFileSize()
 * @method int getOpenTimeOut()
 * @method int getSliceRetryCount()
 * @method int getSliceSize()
 * @method int getSliceTimeout()
 * @method int getSocketNumber()
 * @method string getTestSpeedAppKey()
 * @method string getTestSpeedAuthorization()
 * @method int getTtnetConfigValue()
 * @method string getUploadRegion()
 * @method string getUserStoreRegion()
 * @method string getVideoHostName()
 * @method bool isAiCutAppKey()
 * @method bool isAiCutAuthorization()
 * @method bool isAliveMaxFailTime()
 * @method bool isAppKey()
 * @method bool isAuthorization()
 * @method bool isBackupDNSParseType()
 * @method bool isCaptionAppKey()
 * @method bool isCaptionAuthorization()
 * @method bool isCoverTime()
 * @method bool isDataFlowTimeout()
 * @method bool isEnableClientNetworkJudgement()
 * @method bool isEnableExternDNS()
 * @method bool isEnableExternNet()
 * @method bool isEnableHttps()
 * @method bool isEnableMutitask()
 * @method bool isEnablePostMethod()
 * @method bool isEnableQuic()
 * @method bool isEnableTTNetDNS()
 * @method bool isEnableTtUploaderEvState()
 * @method bool isEnableTtUploaderLogCallback()
 * @method bool isFileHostName()
 * @method bool isFileRetryCount()
 * @method bool isFileTryHttpsEnable()
 * @method bool isIsStreamUploadEnable()
 * @method bool isMainDNSParseType()
 * @method bool isMaxFailTime()
 * @method bool isMaxFailTimeEnabled()
 * @method bool isMaxFileSize()
 * @method bool isOpenTimeOut()
 * @method bool isSliceRetryCount()
 * @method bool isSliceSize()
 * @method bool isSliceTimeout()
 * @method bool isSocketNumber()
 * @method bool isTestSpeedAppKey()
 * @method bool isTestSpeedAuthorization()
 * @method bool isTtnetConfigValue()
 * @method bool isUploadRegion()
 * @method bool isUserStoreRegion()
 * @method bool isVideoHostName()
 * @method $this setAiCutAppKey(string $value)
 * @method $this setAiCutAuthorization(string $value)
 * @method $this setAliveMaxFailTime(int $value)
 * @method $this setAppKey(string $value)
 * @method $this setAuthorization(string $value)
 * @method $this setBackupDNSParseType(int $value)
 * @method $this setCaptionAppKey(string $value)
 * @method $this setCaptionAuthorization(string $value)
 * @method $this setCoverTime(float $value)
 * @method $this setDataFlowTimeout(int $value)
 * @method $this setEnableClientNetworkJudgement(bool $value)
 * @method $this setEnableExternDNS(int $value)
 * @method $this setEnableExternNet(int $value)
 * @method $this setEnableHttps(int $value)
 * @method $this setEnableMutitask(int $value)
 * @method $this setEnablePostMethod(int $value)
 * @method $this setEnableQuic(int $value)
 * @method $this setEnableTTNetDNS(int $value)
 * @method $this setEnableTtUploaderEvState(bool $value)
 * @method $this setEnableTtUploaderLogCallback(bool $value)
 * @method $this setFileHostName(string $value)
 * @method $this setFileRetryCount(int $value)
 * @method $this setFileTryHttpsEnable(bool $value)
 * @method $this setIsStreamUploadEnable(int $value)
 * @method $this setMainDNSParseType(int $value)
 * @method $this setMaxFailTime(int $value)
 * @method $this setMaxFailTimeEnabled(bool $value)
 * @method $this setMaxFileSize(int $value)
 * @method $this setOpenTimeOut(int $value)
 * @method $this setSliceRetryCount(int $value)
 * @method $this setSliceSize(int $value)
 * @method $this setSliceTimeout(int $value)
 * @method $this setSocketNumber(int $value)
 * @method $this setTestSpeedAppKey(string $value)
 * @method $this setTestSpeedAuthorization(string $value)
 * @method $this setTtnetConfigValue(int $value)
 * @method $this setUploadRegion(string $value)
 * @method $this setUserStoreRegion(string $value)
 * @method $this setVideoHostName(string $value)
 * @method $this unsetAiCutAppKey()
 * @method $this unsetAiCutAuthorization()
 * @method $this unsetAliveMaxFailTime()
 * @method $this unsetAppKey()
 * @method $this unsetAuthorization()
 * @method $this unsetBackupDNSParseType()
 * @method $this unsetCaptionAppKey()
 * @method $this unsetCaptionAuthorization()
 * @method $this unsetCoverTime()
 * @method $this unsetDataFlowTimeout()
 * @method $this unsetEnableClientNetworkJudgement()
 * @method $this unsetEnableExternDNS()
 * @method $this unsetEnableExternNet()
 * @method $this unsetEnableHttps()
 * @method $this unsetEnableMutitask()
 * @method $this unsetEnablePostMethod()
 * @method $this unsetEnableQuic()
 * @method $this unsetEnableTTNetDNS()
 * @method $this unsetEnableTtUploaderEvState()
 * @method $this unsetEnableTtUploaderLogCallback()
 * @method $this unsetFileHostName()
 * @method $this unsetFileRetryCount()
 * @method $this unsetFileTryHttpsEnable()
 * @method $this unsetIsStreamUploadEnable()
 * @method $this unsetMainDNSParseType()
 * @method $this unsetMaxFailTime()
 * @method $this unsetMaxFailTimeEnabled()
 * @method $this unsetMaxFileSize()
 * @method $this unsetOpenTimeOut()
 * @method $this unsetSliceRetryCount()
 * @method $this unsetSliceSize()
 * @method $this unsetSliceTimeout()
 * @method $this unsetSocketNumber()
 * @method $this unsetTestSpeedAppKey()
 * @method $this unsetTestSpeedAuthorization()
 * @method $this unsetTtnetConfigValue()
 * @method $this unsetUploadRegion()
 * @method $this unsetUserStoreRegion()
 * @method $this unsetVideoHostName()
 */
class VideoConfig extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'sliceRetryCount'                     => 'int',
        'captionAppKey'                       => 'string',
        'aliveMaxFailTime'                    => 'int',
        'sliceSize'                           => 'int',
        'openTimeOut'                         => 'int',
        'is_stream_upload_enable'             => 'int',
        'videoHostName'                       => 'string',
        'authorization'                       => 'string',
        'maxFailTimeEnabled'                  => 'bool',
        'fileRetryCount'                      => 'int',
        'enable_client_network_judgement'     => 'bool',
        'userStoreRegion'                     => 'string',
        'captionAuthorization'                => 'string',
        'mainDNSParseType'                    => 'int',
        'ttnetConfigValue'                    => 'int',
        'fileHostName'                        => 'string',
        'backupDNSParseType'                  => 'int',
        'socketNumber'                        => 'int',
        'data_flow_timeout'                   => 'int',
        'appKey'                              => 'string',
        'enableQuic'                          => 'int',
        'testSpeedAuthorization'              => 'string',
        'sliceTimeout'                        => 'int',
        'uploadRegion'                        => 'string',
        'fileTryHttpsEnable'                  => 'bool',
        'enableExternNet'                     => 'int',
        'enableMutitask'                      => 'int',
        'aiCutAuthorization'                  => 'string',
        'enableHttps'                         => 'int',
        'maxFailTime'                         => 'int',
        'testSpeedAppKey'                     => 'string',
        'enableTTNetDNS'                      => 'int',
        'enablePostMethod'                    => 'int',
        'enable_tt_uploader_ev_state'         => 'bool',
        'enableExternDNS'                     => 'int',
        'aiCutAppKey'                         => 'string',
        'coverTime'                           => 'float',
        'maxFileSize'                         => 'int',
        'enable_tt_uploader_log_callback'     => 'bool',
    ];
}
