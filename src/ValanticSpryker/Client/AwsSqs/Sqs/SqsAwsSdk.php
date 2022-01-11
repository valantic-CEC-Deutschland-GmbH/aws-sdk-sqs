<?php declare(strict_types = 1);

namespace ValanticSpryker\Client\AwsSqs\Sqs;

use Aws\Result;
use Aws\Sqs\SqsClient;
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

class SqsAwsSdk implements SqsAwsSdkInterface
{
    private SqsClient $sqsClient;

    /**
     * @param \Aws\Sqs\SqsClient $sqsClient
     */
    public function __construct(SqsClient $sqsClient)
    {
        $this->sqsClient = $sqsClient;
    }

    /**
     * @param \Generated\Shared\Transfer\SqsCreateQueueArgsTransfer $sqsCreateQueueArgsTransfer
     *
     * @return \Aws\Result
     */
    public function createQueue(SqsCreateQueueArgsTransfer $sqsCreateQueueArgsTransfer): Result
    {
        return $this->sqsClient
            ->createQueue($sqsCreateQueueArgsTransfer->toArray());
    }

    /**
     * @param \Generated\Shared\Transfer\SqsDeleteQueueArgsTransfer $sqsDeleteQueueArgsTransfer
     *
     * @return void
     */
    public function deleteQueue(SqsDeleteQueueArgsTransfer $sqsDeleteQueueArgsTransfer): void
    {
        $this->sqsClient
            ->deleteQueue($sqsDeleteQueueArgsTransfer->toArray());
    }

    /**
     * @param \Generated\Shared\Transfer\SqsPurgeQueueArgsTransfer $sqsPurgeQueueArgsTransfer
     *
     * @return void
     */
    public function purgeQueue(SqsPurgeQueueArgsTransfer $sqsPurgeQueueArgsTransfer): void
    {
        $this->sqsClient
            ->purgeQueue($sqsPurgeQueueArgsTransfer->toArray());
    }

    /**
     * @param \Generated\Shared\Transfer\SqsSendMessageArgsTransfer $sqsSendMessageArgsTransfer
     *
     * @return \Aws\Result
     */
    public function sendMessage(SqsSendMessageArgsTransfer $sqsSendMessageArgsTransfer): Result
    {
        return $this->sqsClient
            ->sendMessage($sqsSendMessageArgsTransfer->toArray());
    }

    /**
     * @param \Generated\Shared\Transfer\SqsSendMessageArgsTransfer $sqsSendMessageArgsTransfer
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendMessageAsync(SqsSendMessageArgsTransfer $sqsSendMessageArgsTransfer): PromiseInterface
    {
        return $this->sqsClient
            ->sendMessageAsync($sqsSendMessageArgsTransfer->toArray());
    }

    /**
     * @param \Generated\Shared\Transfer\SqsSendMessageBatchArgsTransfer $sqsSendMessageBatchArgsTransfer
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendMessageBatchAsync(SqsSendMessageBatchArgsTransfer $sqsSendMessageBatchArgsTransfer): PromiseInterface
    {
        return $this->sqsClient
            ->sendMessageBatchAsync($sqsSendMessageBatchArgsTransfer->toArray());
    }

    /**
     * @param \Generated\Shared\Transfer\SqsReceiveMessageArgsTransfer $sqsReceiveMessageArgsTransfer
     *
     * @return \Aws\Result
     */
    public function receiveMessage(SqsReceiveMessageArgsTransfer $sqsReceiveMessageArgsTransfer): Result
    {
        return $this->sqsClient
            ->receiveMessage($sqsReceiveMessageArgsTransfer->toArray());
    }

    /**
     * @param \Generated\Shared\Transfer\SqsDeleteMessageArgsTransfer $sqsDeleteMessageArgsTransfer
     *
     * @return void
     */
    public function deleteMessage(SqsDeleteMessageArgsTransfer $sqsDeleteMessageArgsTransfer): void
    {
        $this->sqsClient
            ->deleteMessage($sqsDeleteMessageArgsTransfer->toArray());
    }

    /**
     * @param \Generated\Shared\Transfer\SqsChangeMessageVisibilityArgsTransfer $sqsChangeMessageVisibilityArgsTransfer
     *
     * @return void
     */
    public function changeMessageVisibility(SqsChangeMessageVisibilityArgsTransfer $sqsChangeMessageVisibilityArgsTransfer): void
    {
        $this->sqsClient
            ->changeMessageVisibility($sqsChangeMessageVisibilityArgsTransfer->toArray());
    }

    /**
     * @param \Generated\Shared\Transfer\SqsChangeMessageVisibilityArgsTransfer $sqsChangeMessageVisibilityArgsTransfer
     *
     * @return void
     */
    public function changeMessageVisibilityAsync(SqsChangeMessageVisibilityArgsTransfer $sqsChangeMessageVisibilityArgsTransfer): void
    {
        $this->sqsClient
            ->changeMessageVisibilityAsync($sqsChangeMessageVisibilityArgsTransfer->toArray());
    }

    /**
     * @param \Generated\Shared\Transfer\SqsGetQueueAttributesArgsTransfer $sqsGetQueueAttributesArgsTransfer
     *
     * @return \Aws\Result
     */
    public function getQueueAttributes(SqsGetQueueAttributesArgsTransfer $sqsGetQueueAttributesArgsTransfer): Result
    {
        return $this->sqsClient
            ->getQueueAttributes($sqsGetQueueAttributesArgsTransfer->toArray());
    }
}
