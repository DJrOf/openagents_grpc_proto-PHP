<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>RpcCloseDiskRequest</code>
 */
class RpcCloseDiskRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string diskId = 1;</code>
     */
    protected $diskId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $diskId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string diskId = 1;</code>
     * @return string
     */
    public function getDiskId()
    {
        return $this->diskId;
    }

    /**
     * Generated from protobuf field <code>string diskId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDiskId($var)
    {
        GPBUtil::checkString($var, True);
        $this->diskId = $var;

        return $this;
    }

}

