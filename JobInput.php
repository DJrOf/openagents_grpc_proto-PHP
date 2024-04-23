<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: JobInput.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JobInput</code>
 */
class JobInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string data = 1;</code>
     */
    protected $data = null;
    /**
     * Generated from protobuf field <code>optional string ref = 2;</code>
     */
    protected $ref = null;
    /**
     * Generated from protobuf field <code>string type = 3;</code>
     */
    protected $type = '';
    /**
     * Generated from protobuf field <code>string marker = 4;</code>
     */
    protected $marker = '';
    /**
     * Generated from protobuf field <code>optional string source = 5;</code>
     */
    protected $source = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $data
     *     @type string $ref
     *     @type string $type
     *     @type string $marker
     *     @type string $source
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\JobInput::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string data = 1;</code>
     * @return string
     */
    public function getData()
    {
        return isset($this->data) ? $this->data : '';
    }

    public function hasData()
    {
        return isset($this->data);
    }

    public function clearData()
    {
        unset($this->data);
    }

    /**
     * Generated from protobuf field <code>optional string data = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, True);
        $this->data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string ref = 2;</code>
     * @return string
     */
    public function getRef()
    {
        return isset($this->ref) ? $this->ref : '';
    }

    public function hasRef()
    {
        return isset($this->ref);
    }

    public function clearRef()
    {
        unset($this->ref);
    }

    /**
     * Generated from protobuf field <code>optional string ref = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRef($var)
    {
        GPBUtil::checkString($var, True);
        $this->ref = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string type = 3;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>string type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string marker = 4;</code>
     * @return string
     */
    public function getMarker()
    {
        return $this->marker;
    }

    /**
     * Generated from protobuf field <code>string marker = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMarker($var)
    {
        GPBUtil::checkString($var, True);
        $this->marker = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string source = 5;</code>
     * @return string
     */
    public function getSource()
    {
        return isset($this->source) ? $this->source : '';
    }

    public function hasSource()
    {
        return isset($this->source);
    }

    public function clearSource()
    {
        unset($this->source);
    }

    /**
     * Generated from protobuf field <code>optional string source = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

}

