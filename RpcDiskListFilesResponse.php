<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>RpcDiskListFilesResponse</code>
 */
class RpcDiskListFilesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string files = 1;</code>
     */
    private $files;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $files
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string files = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Generated from protobuf field <code>repeated string files = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->files = $arr;

        return $this;
    }

}

