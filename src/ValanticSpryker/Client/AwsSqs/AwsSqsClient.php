<?php declare(strict_types = 1);

namespace ValanticSpryker\Client\AwsSqs;

use Aws\Result;
use Generated\Shared\Transfer\SqsChangeMessageVisibilityArgsTransfer;
use Generated\Shared\Transfer\SqsCreateQueueArgsTransfer;
use Generated\Shared\Transfer\SqsDeleteMessageArgsTransfer;
use Generated\Shared\Transfer\SqsDeleteQueueArgsTransfer;
use Generated\Shared\Transfer\SqsGetQueueAttributesArgsTransfer;
use Generated\Shared\Transfer\SqsPurgeQueueArgsTransfer;
use Generated\Shared\Transfer\SqsReceiveMessageArgsTransfer;
use Generated\Shared\Transfer\SqsSendMessageArgsTransfer;
use Generated\Shared\Transfer\SqsSendMessageBatchArgsTransfer;
use GuzzleHttp\Promise\PromiseInterface;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \ValanticSpryker\Client\AwsSqs\AwsSqsFactory getFactory()
 */
class AwsSqsClient extends AbstractClient implements AwsSqsClientInterface
{
    /**
     * @param \Generated\Shared\Transfer\SqsCreateQueueArgsTransfer $sqsCreateQueueArgsTransfer
     *
     * @return \Aws\Result
     */
    public function createQueue(SqsCreateQueueArgsTransfer $sqsCreateQueueArgsTransfer): Result
    {
        return $this->getFactory()
            ->createSqsAwsSdk()
            ->createQueue($sqsCreateQueueArgsTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\SqsDeleteQueueArgsTransfer $sqsDeleteQueueArgsTransfer
     *
     * @return void
     */
    public function deleteQueue(SqsDeleteQueueArgsTransfer $sqsDeleteQueueArgsTransfer): void
    {
        $this->getFactory()
            ->createSqsAwsSdk()
            ->deleteQueue($sqsDeleteQueueArgsTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\SqsPurgeQueueArgsTransfer $sqsPurgeQueueArgsTransfer
     *
     * @return void
     */
    public function purgeQueue(SqsPurgeQueueArgsTransfer $sqsPurgeQueueArgsTransfer): void
    {
        $this->getFactory()
            ->createSqsAwsSdk()
            ->purgeQueue($sqsPurgeQueueArgsTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\SqsSendMessageArgsTransfer $sqsSendMessageArgsTransfer
     *
     * @return \Aws\Result
     */
    public function sendMessage(SqsSendMessageArgsTransfer $sqsSendMessageArgsTransfer): Result
    {
        return $this->getFactory()
            ->createSqsAwsSdk()
            ->sendMessage($sqsSendMessageArgsTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\SqsSendMessageArgsTransfer $sqsSendMessageArgsTransfer
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendMessageAsync(SqsSendMessageArgsTransfer $sqsSendMessageArgsTransfer): PromiseInterface
    {
        return $this->getFactory()
            ->createSqsAwsSdk()
            ->sendMessageAsync($sqsSendMessageArgsTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\SqsSendMessageBatchArgsTransfer $sqsSendMessageBatchArgsTransfer
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendMessageBatchAsync(SqsSendMessageBatchArgsTransfer $sqsSendMessageBatchArgsTransfer): PromiseInterface
    {
        return $this->getFactory()
            ->createSqsAwsSdk()
            ->sendMessageBatchAsync($sqsSendMessageBatchArgsTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\SqsReceiveMessageArgsTransfer $sqsReceiveMessageArgsTransfer
     *
     * @return \Aws\Result
     */
    public function receiveMessage(SqsReceiveMessageArgsTransfer $sqsReceiveMessageArgsTransfer): Result
    {
        return $this->getFactory()
            ->createSqsAwsSdk()
            ->receiveMessage($sqsReceiveMessageArgsTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\SqsDeleteMessageArgsTransfer $sqsDeleteMessageArgsTransfer
     *
     * @return void
     */
    public function deleteMessage(SqsDeleteMessageArgsTransfer $sqsDeleteMessageArgsTransfer): void
    {
        $this->getFactory()
            ->createSqsAwsSdk()
            ->deleteMessage($sqsDeleteMessageArgsTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\SqsChangeMessageVisibilityArgsTransfer $sqsChangeMessageVisibilityArgsTransfer
     *
     * @return void
     */
    public function changeMessageVisibility(SqsChangeMessageVisibilityArgsTransfer $sqsChangeMessageVisibilityArgsTransfer): void
    {
        $this->getFactory()
            ->createSqsAwsSdk()
            ->changeMessageVisibility($sqsChangeMessageVisibilityArgsTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\SqsChangeMessageVisibilityArgsTransfer $sqsChangeMessageVisibilityArgsTransfer
     *
     * @return void
     */
    public function changeMessageVisibilityAsync(SqsChangeMessageVisibilityArgsTransfer $sqsChangeMessageVisibilityArgsTransfer): void
    {
        $this->getFactory()
            ->createSqsAwsSdk()
            ->changeMessageVisibilityAsync($sqsChangeMessageVisibilityArgsTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\SqsGetQueueAttributesArgsTransfer $sqsGetQueueAttributesArgsTransfer
     *
     * @return \Aws\Result
     */
    public function getQueueAttributes(SqsGetQueueAttributesArgsTransfer $sqsGetQueueAttributesArgsTransfer): Result
    {
        return $this->getFactory()
            ->createSqsAwsSdk()
            ->getQueueAttributes($sqsGetQueueAttributesArgsTransfer);
    }
}
