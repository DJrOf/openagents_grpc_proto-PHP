<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>RpcGetPendingJobs</code>
 */
class RpcGetPendingJobs extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string filterByRunOn = 1;</code>
     */
    protected $filterByRunOn = null;
    /**
     * Generated from protobuf field <code>optional string filterByCustomer = 2;</code>
     */
    protected $filterByCustomer = null;
    /**
     * Generated from protobuf field <code>optional string filterByDescription = 3;</code>
     */
    protected $filterByDescription = null;
    /**
     * Generated from protobuf field <code>optional string filterById = 4;</code>
     */
    protected $filterById = null;
    /**
     * Generated from protobuf field <code>optional string filterByKind = 5;</code>
     */
    protected $filterByKind = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $filterByRunOn
     *     @type string $filterByCustomer
     *     @type string $filterByDescription
     *     @type string $filterById
     *     @type string $filterByKind
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string filterByRunOn = 1;</code>
     * @return string
     */
    public function getFilterByRunOn()
    {
        return isset($this->filterByRunOn) ? $this->filterByRunOn : '';
    }

    public function hasFilterByRunOn()
    {
        return isset($this->filterByRunOn);
    }

    public function clearFilterByRunOn()
    {
        unset($this->filterByRunOn);
    }

    /**
     * Generated from protobuf field <code>optional string filterByRunOn = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFilterByRunOn($var)
    {
        GPBUtil::checkString($var, True);
        $this->filterByRunOn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string filterByCustomer = 2;</code>
     * @return string
     */
    public function getFilterByCustomer()
    {
        return isset($this->filterByCustomer) ? $this->filterByCustomer : '';
    }

    public function hasFilterByCustomer()
    {
        return isset($this->filterByCustomer);
    }

    public function clearFilterByCustomer()
    {
        unset($this->filterByCustomer);
    }

    /**
     * Generated from protobuf field <code>optional string filterByCustomer = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilterByCustomer($var)
    {
        GPBUtil::checkString($var, True);
        $this->filterByCustomer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string filterByDescription = 3;</code>
     * @return string
     */
    public function getFilterByDescription()
    {
        return isset($this->filterByDescription) ? $this->filterByDescription : '';
    }

    public function hasFilterByDescription()
    {
        return isset($this->filterByDescription);
    }

    public function clearFilterByDescription()
    {
        unset($this->filterByDescription);
    }

    /**
     * Generated from protobuf field <code>optional string filterByDescription = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFilterByDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->filterByDescription = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string filterById = 4;</code>
     * @return string
     */
    public function getFilterById()
    {
        return isset($this->filterById) ? $this->filterById : '';
    }

    public function hasFilterById()
    {
        return isset($this->filterById);
    }

    public function clearFilterById()
    {
        unset($this->filterById);
    }

    /**
     * Generated from protobuf field <code>optional string filterById = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFilterById($var)
    {
        GPBUtil::checkString($var, True);
        $this->filterById = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string filterByKind = 5;</code>
     * @return string
     */
    public function getFilterByKind()
    {
        return isset($this->filterByKind) ? $this->filterByKind : '';
    }

    public function hasFilterByKind()
    {
        return isset($this->filterByKind);
    }

    public function clearFilterByKind()
    {
        unset($this->filterByKind);
    }

    /**
     * Generated from protobuf field <code>optional string filterByKind = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setFilterByKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->filterByKind = $var;

        return $this;
    }

}

