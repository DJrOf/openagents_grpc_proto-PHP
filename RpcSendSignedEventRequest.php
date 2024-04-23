<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>RpcSendSignedEventRequest</code>
 */
class RpcSendSignedEventRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * the group id of the event, will be used for gc, etc. If generated by a job it should be set to the job id
     *
     * Generated from protobuf field <code>string groupId = 1;</code>
     */
    protected $groupId = '';
    /**
     * Generated from protobuf field <code>string event = 2;</code>
     */
    protected $event = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $groupId
     *           the group id of the event, will be used for gc, etc. If generated by a job it should be set to the job id
     *     @type string $event
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * the group id of the event, will be used for gc, etc. If generated by a job it should be set to the job id
     *
     * Generated from protobuf field <code>string groupId = 1;</code>
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * the group id of the event, will be used for gc, etc. If generated by a job it should be set to the job id
     *
     * Generated from protobuf field <code>string groupId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->groupId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string event = 2;</code>
     * @return string
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Generated from protobuf field <code>string event = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEvent($var)
    {
        GPBUtil::checkString($var, True);
        $this->event = $var;

        return $this;
    }

}

