<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Job.proto

namespace GPBMetadata;

class Job
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\JobParam::initOnce();
        \GPBMetadata\JobInput::initOnce();
        \GPBMetadata\JobState::initOnce();
        \GPBMetadata\JobResult::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
	Job.protoJobInput.protoJobState.protoJobResult.proto"�
Job

id (	
kind (
runOn (	

expiration (
	timestamp (
input (2	.JobInput
param (2	.JobParam
customerPublicKey (	
description (	
provider	 (	
relays
 (	
result (2
.JobResult
state (2	.JobState
maxExecutionTime (
nodeId (	
outputFormat (	bproto3'
        , true);

        static::$is_initialized = true;
    }
}

