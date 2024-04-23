<?php
// GENERATED CODE -- DO NOT EDIT!

namespace ;

/**
 */
class PoolConnectorClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * job management
     * @param \RpcRequestJob $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function requestJob(\RpcRequestJob $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/PoolConnector/requestJob',
        $argument,
        ['\Job', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RpcGetJob $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getJob(\RpcGetJob $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/PoolConnector/getJob',
        $argument,
        ['\Job', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RpcGetPendingJobs $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getPendingJobs(\RpcGetPendingJobs $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/PoolConnector/getPendingJobs',
        $argument,
        ['\PendingJobs', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RpcGetJob $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function isJobDone(\RpcGetJob $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/PoolConnector/isJobDone',
        $argument,
        ['\RpcIsJobDone', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RpcAcceptJob $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function acceptJob(\RpcAcceptJob $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/PoolConnector/acceptJob',
        $argument,
        ['\Job', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RpcCancelJob $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function cancelJob(\RpcCancelJob $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/PoolConnector/cancelJob',
        $argument,
        ['\Job', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RpcJobOutput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function outputForJob(\RpcJobOutput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/PoolConnector/outputForJob',
        $argument,
        ['\Job', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RpcJobComplete $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function completeJob(\RpcJobComplete $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/PoolConnector/completeJob',
        $argument,
        ['\Job', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RpcJobLog $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function logForJob(\RpcJobLog $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/PoolConnector/logForJob',
        $argument,
        ['\Job', 'decode'],
        $metadata, $options);
    }

    /**
     * discovery
     * @param \RpcAnnounceNodeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function announceNode(\RpcAnnounceNodeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/PoolConnector/announceNode',
        $argument,
        ['\RpcAnnounceNodeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RpcAnnounceTemplateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function announceEventTemplate(\RpcAnnounceTemplateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/PoolConnector/announceEventTemplate',
        $argument,
        ['\RpcAnnounceTemplateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * generic nostr events
     * @param \RpcSendSignedEventRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function sendSignedEvent(\RpcSendSignedEventRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/PoolConnector/sendSignedEvent',
        $argument,
        ['\RpcSendSignedEventResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RpcSubscribeToEventsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function subscribeToEvents(\RpcSubscribeToEventsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/PoolConnector/subscribeToEvents',
        $argument,
        ['\RpcSubscribeToEventsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RpcUnsubscribeFromEventsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function unsubscribeFromEvents(\RpcUnsubscribeFromEventsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/PoolConnector/unsubscribeFromEvents',
        $argument,
        ['\RpcUnsubscribeFromEventsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RpcGetEventsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getEvents(\RpcGetEventsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/PoolConnector/getEvents',
        $argument,
        ['\RpcGetEventsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * blob storage
     * @param \RpcCreateDiskRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function createDisk(\RpcCreateDiskRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/PoolConnector/createDisk',
        $argument,
        ['\RpcCreateDiskResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RpcOpenDiskRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function openDisk(\RpcOpenDiskRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/PoolConnector/openDisk',
        $argument,
        ['\RpcOpenDiskResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RpcCloseDiskRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function closeDisk(\RpcCloseDiskRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/PoolConnector/closeDisk',
        $argument,
        ['\RpcCloseDiskResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RpcDiskDeleteFileRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function diskDeleteFile(\RpcDiskDeleteFileRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/PoolConnector/diskDeleteFile',
        $argument,
        ['\RpcDiskDeleteFileResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RpcDiskListFilesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function diskListFiles(\RpcDiskListFilesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/PoolConnector/diskListFiles',
        $argument,
        ['\RpcDiskListFilesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RpcDiskReadFileRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function diskReadFile(\RpcDiskReadFileRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/PoolConnector/diskReadFile',
        $argument,
        ['\RpcDiskReadFileResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RpcDiskReadFileRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function diskReadSmallFile(\RpcDiskReadFileRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/PoolConnector/diskReadSmallFile',
        $argument,
        ['\RpcDiskReadFileResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ClientStreamingCall
     */
    public function diskWriteFile($metadata = [], $options = []) {
        return $this->_clientStreamRequest('/PoolConnector/diskWriteFile',
        ['\RpcDiskWriteFileResponse','decode'],
        $metadata, $options);
    }

    /**
     * @param \RpcDiskWriteFileRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function diskWriteSmallFile(\RpcDiskWriteFileRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/PoolConnector/diskWriteSmallFile',
        $argument,
        ['\RpcDiskWriteFileResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * cache
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ClientStreamingCall
     */
    public function cacheSet($metadata = [], $options = []) {
        return $this->_clientStreamRequest('/PoolConnector/cacheSet',
        ['\RpcCacheSetResponse','decode'],
        $metadata, $options);
    }

    /**
     * @param \RpcCacheGetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function cacheGet(\RpcCacheGetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/PoolConnector/cacheGet',
        $argument,
        ['\RpcCacheGetResponse', 'decode'],
        $metadata, $options);
    }

}
