<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: JobState.proto

namespace GPBMetadata;

class JobState
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Log::initOnce();
        \GPBMetadata\JobStatus::initOnce();
        $pool->internalAddGeneratedFile(
            '
 
JobState.protoJobStatus.proto"u
JobState

acceptedAt (

acceptedBy (	
status (2
.JobStatus
logs (2.Log
	timestamp (bproto3'
        , true);

        static::$is_initialized = true;
    }
}

