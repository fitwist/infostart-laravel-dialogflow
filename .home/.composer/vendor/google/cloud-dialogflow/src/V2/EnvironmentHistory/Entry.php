<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/environment.proto

namespace Google\Cloud\Dialogflow\V2\EnvironmentHistory;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an environment history entry.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.EnvironmentHistory.Entry</code>
 */
class Entry extends \Google\Protobuf\Internal\Message
{
    /**
     * The agent version loaded into this environment history entry.
     *
     * Generated from protobuf field <code>string agent_version = 1;</code>
     */
    private $agent_version = '';
    /**
     * The developer-provided description for this environment history entry.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';
    /**
     * The creation time of this environment history entry.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     */
    private $create_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $agent_version
     *           The agent version loaded into this environment history entry.
     *     @type string $description
     *           The developer-provided description for this environment history entry.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           The creation time of this environment history entry.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Environment::initOnce();
        parent::__construct($data);
    }

    /**
     * The agent version loaded into this environment history entry.
     *
     * Generated from protobuf field <code>string agent_version = 1;</code>
     * @return string
     */
    public function getAgentVersion()
    {
        return $this->agent_version;
    }

    /**
     * The agent version loaded into this environment history entry.
     *
     * Generated from protobuf field <code>string agent_version = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAgentVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->agent_version = $var;

        return $this;
    }

    /**
     * The developer-provided description for this environment history entry.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The developer-provided description for this environment history entry.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * The creation time of this environment history entry.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return isset($this->create_time) ? $this->create_time : null;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * The creation time of this environment history entry.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Entry::class, \Google\Cloud\Dialogflow\V2\EnvironmentHistory_Entry::class);

