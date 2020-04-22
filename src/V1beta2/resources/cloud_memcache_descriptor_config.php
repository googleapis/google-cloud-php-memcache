<?php

return [
    'interfaces' => [
        'google.cloud.memcache.v1beta2.CloudMemcache' => [
            'CreateInstance' => [
                'longRunning' => [
                    'operationReturnType' => '\Google\Cloud\Memcache\V1beta2\Instance',
                    'metadataReturnType' => '\Google\Cloud\Memcache\V1beta2\OperationMetadata',
                    'initialPollDelayMillis' => '500',
                    'pollDelayMultiplier' => '1.5',
                    'maxPollDelayMillis' => '5000',
                    'totalPollTimeoutMillis' => '300000',
                ],
            ],
            'UpdateInstance' => [
                'longRunning' => [
                    'operationReturnType' => '\Google\Cloud\Memcache\V1beta2\Instance',
                    'metadataReturnType' => '\Google\Cloud\Memcache\V1beta2\OperationMetadata',
                    'initialPollDelayMillis' => '500',
                    'pollDelayMultiplier' => '1.5',
                    'maxPollDelayMillis' => '5000',
                    'totalPollTimeoutMillis' => '300000',
                ],
            ],
            'UpdateParameters' => [
                'longRunning' => [
                    'operationReturnType' => '\Google\Cloud\Memcache\V1beta2\Instance',
                    'metadataReturnType' => '\Google\Cloud\Memcache\V1beta2\OperationMetadata',
                    'initialPollDelayMillis' => '500',
                    'pollDelayMultiplier' => '1.5',
                    'maxPollDelayMillis' => '5000',
                    'totalPollTimeoutMillis' => '300000',
                ],
            ],
            'DeleteInstance' => [
                'longRunning' => [
                    'operationReturnType' => '\Google\Protobuf\GPBEmpty',
                    'metadataReturnType' => '\Google\Cloud\Memcache\V1beta2\OperationMetadata',
                    'initialPollDelayMillis' => '500',
                    'pollDelayMultiplier' => '1.5',
                    'maxPollDelayMillis' => '5000',
                    'totalPollTimeoutMillis' => '300000',
                ],
            ],
            'ApplyParameters' => [
                'longRunning' => [
                    'operationReturnType' => '\Google\Cloud\Memcache\V1beta2\Instance',
                    'metadataReturnType' => '\Google\Cloud\Memcache\V1beta2\OperationMetadata',
                    'initialPollDelayMillis' => '500',
                    'pollDelayMultiplier' => '1.5',
                    'maxPollDelayMillis' => '5000',
                    'totalPollTimeoutMillis' => '300000',
                ],
            ],
            'ListInstances' => [
                'pageStreaming' => [
                    'requestPageTokenGetMethod' => 'getPageToken',
                    'requestPageTokenSetMethod' => 'setPageToken',
                    'requestPageSizeGetMethod' => 'getPageSize',
                    'requestPageSizeSetMethod' => 'setPageSize',
                    'responsePageTokenGetMethod' => 'getNextPageToken',
                    'resourcesGetMethod' => 'getResources',
                ],
            ],
        ],
    ],
];
