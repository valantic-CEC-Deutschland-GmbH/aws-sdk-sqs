<?php declare(strict_types = 1);

namespace ValanticSpryker\Client\AwsSqs;

use Aws\Sqs\SqsClient;
use Spryker\Client\Kernel\AbstractFactory;
use ValanticSpryker\Client\AwsSqs\Sqs\SqsAwsSdk;
use ValanticSpryker\Client\AwsSqs\Sqs\SqsAwsSdkInterface;

/**
 * @method \ValanticSpryker\Client\AwsSqs\AwsSqsConfig getConfig()
 */
class AwsSqsFactory extends AbstractFactory
{
    /**
     * @return \ValanticSpryker\Client\AwsSqs\Sqs\SqsAwsSdkInterface
     */
    public function createSqsAwsSdk(): SqsAwsSdkInterface
    {
        return new SqsAwsSdk(
            $this->createAwsSqsClient(),
        );
    }

    /**
     * @return \Aws\Sqs\SqsClient
     */
    public function createAwsSqsClient(): SqsClient
    {
        return new SqsClient($this->getConfig()->getAwsClientConfiguration());
    }
}
