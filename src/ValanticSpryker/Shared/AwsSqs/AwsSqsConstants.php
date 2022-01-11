<?php declare(strict_types = 1);

namespace ValanticSpryker\Shared\AwsSqs;

interface AwsSqsConstants
{
    /**
     * @var string
     */
    public const AWS_SQS_CONFIG_PARAM_REGION = 'AWS_SDK_SQS_CONFIG_PARAM_REGION';

    /**
     * @var string
     */
    public const AWS_SQS_CONFIG_PARAM_VERSION = 'AWS_SDK_SQS_CONFIG_PARAM_VERSION';

    /**
     * @var string
     */
    public const AWS_SQS_CONFIG_PARAM_ENDPOINT = 'AWS_SDK_SQS_CONFIG_PARAM_ENDPOINT';

    /**
     * @var string
     */
    public const AWS_SQS_CONFIG_PARAM_API_KEY = 'AWS_SQS_CONFIG_PARAM_API_KEY';

    /**
     * @var string
     */
    public const AWS_SQS_CONFIG_PARAM_API_SECRET = 'AWS_SQS_CONFIG_PARAM_API_SECRET';

    /**
     * @var string
     */
    public const AWS_SQS_CONFIG_PARAM_USE_IAM = 'AWS_SQS_CONFIG_PARAM_USE_IAM';
}
