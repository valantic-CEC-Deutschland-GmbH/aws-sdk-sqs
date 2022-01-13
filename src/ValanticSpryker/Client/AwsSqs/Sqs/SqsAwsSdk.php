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
            ->createQueue([
                'QueueName' => $sqsCreateQueueArgsTransfer->getQueueName(),
                'tags' => $sqsCreateQueueArgsTransfer->getTags(),
                'Attributes' => $sqsCreateQueueArgsTransfer->getAttributes(),
            ]);
    }

    /**
     * @param \Generated\Shared\Transfer\SqsDeleteQueueArgsTransfer $sqsDeleteQueueArgsTransfer
     *
     * @return void
     */
    public function deleteQueue(SqsDeleteQueueArgsTransfer $sqsDeleteQueueArgsTransfer): void
    {
        $this->sqsClient
            ->deleteQueue([
                'QueueUrl' => $sqsDeleteQueueArgsTransfer->getQueueUrl(),
            ]);
    }

    /**
     * @param \Generated\Shared\Transfer\SqsPurgeQueueArgsTransfer $sqsPurgeQueueArgsTransfer
     *
     * @return void
     */
    public function purgeQueue(SqsPurgeQueueArgsTransfer $sqsPurgeQueueArgsTransfer): void
    {
        $this->sqsClient
            ->purgeQueue([
                'QueueUrl' => $sqsPurgeQueueArgsTransfer->getQueueUrl(),
            ]);
    }

    /**
     * @param \Generated\Shared\Transfer\SqsSendMessageArgsTransfer $sqsSendMessageArgsTransfer
     *
     * @return \Aws\Result
     */
    public function sendMessage(SqsSendMessageArgsTransfer $sqsSendMessageArgsTransfer): Result
    {
        return $this->sqsClient
            ->sendMessage([
                'QueueUrl' => $sqsSendMessageArgsTransfer->getQueueUrl(),
                'DelaySeconds' => $sqsSendMessageArgsTransfer->getDelaySeconds(),
                'MessageAttributes' => $sqsSendMessageArgsTransfer->getMessageAttributes(),
                'MessageBody' => $sqsSendMessageArgsTransfer->getMessageBody(),
                'MessageDeduplicationId' => $sqsSendMessageArgsTransfer->getMessageDeduplicationId(),
                'MessageGroupId' => $sqsSendMessageArgsTransfer->getMessageGroupId(),
                'MessageSystemAttributes' => $sqsSendMessageArgsTransfer->getMessageSystemAttributes(),
            ]);
    }

    /**
     * @param \Generated\Shared\Transfer\SqsSendMessageArgsTransfer $sqsSendMessageArgsTransfer
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendMessageAsync(SqsSendMessageArgsTransfer $sqsSendMessageArgsTransfer): PromiseInterface
    {
        return $this->sqsClient
            ->sendMessageAsync([
                'QueueUrl' => $sqsSendMessageArgsTransfer->getQueueUrl(),
                'DelaySeconds' => $sqsSendMessageArgsTransfer->getDelaySeconds(),
                'MessageAttributes' => $sqsSendMessageArgsTransfer->getMessageAttributes(),
                'MessageBody' => $sqsSendMessageArgsTransfer->getMessageBody(),
                'MessageDeduplicationId' => $sqsSendMessageArgsTransfer->getMessageDeduplicationId(),
                'MessageGroupId' => $sqsSendMessageArgsTransfer->getMessageGroupId(),
                'MessageSystemAttributes' => $sqsSendMessageArgsTransfer->getMessageSystemAttributes(),
            ]);
    }

    /**
     * @param \Generated\Shared\Transfer\SqsSendMessageBatchArgsTransfer $sqsSendMessageBatchArgsTransfer
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendMessageBatchAsync(SqsSendMessageBatchArgsTransfer $sqsSendMessageBatchArgsTransfer): PromiseInterface
    {
        $entries = [];
        foreach ($sqsSendMessageBatchArgsTransfer->getEntries() as $entry) {
            $entries[] = [
                'DelaySeconds' => $entry->getDelaySeconds(),
                'Id' => $entry->getId(),
                'MessageAttributes' => $entry->getMessageAttributes(),
                'MessageBody' => $entry->getMessageBody(),
                'MessageDeduplicationId' => $entry->getMessageDeduplicationId(),
                'MessageGroupId' => $entry->getMessageGroupId(),
                'MessageSystemAttributes' => $entry->getMessageSystemAttributes(),
            ];
        }

        return $this->sqsClient
            ->sendMessageBatchAsync([
                'QueueUrl' => $sqsSendMessageBatchArgsTransfer->getQueueUrl(),
                'Entries' => $entries,
            ]);
    }

    /**
     * @param \Generated\Shared\Transfer\SqsReceiveMessageArgsTransfer $sqsReceiveMessageArgsTransfer
     *
     * @return \Aws\Result
     */
    public function receiveMessage(SqsReceiveMessageArgsTransfer $sqsReceiveMessageArgsTransfer): Result
    {
        return $this->sqsClient
            ->receiveMessage([
                'QueueUrl' => $sqsReceiveMessageArgsTransfer->getQueueUrl(),
                'AttributeNames' => $sqsReceiveMessageArgsTransfer->getAttributeNames(),
                'MaxNumberOfMessages' => $sqsReceiveMessageArgsTransfer->getMaxNumberOfMessages(),
                'MessageAttributeNames' => $sqsReceiveMessageArgsTransfer->getMessageAttributeNames(),
                'ReceiveRequestAttemptId' => $sqsReceiveMessageArgsTransfer->getReceiveRequestAttemptId(),
                'VisibilityTimeout' => $sqsReceiveMessageArgsTransfer->getVisibilityTimeout(),
                'WaitTimeSeconds' => $sqsReceiveMessageArgsTransfer->getWaitTimeSeconds(),
            ]);
    }

    /**
     * @param \Generated\Shared\Transfer\SqsDeleteMessageArgsTransfer $sqsDeleteMessageArgsTransfer
     *
     * @return void
     */
    public function deleteMessage(SqsDeleteMessageArgsTransfer $sqsDeleteMessageArgsTransfer): void
    {
        $this->sqsClient
            ->deleteMessage([
                'QueueUrl' => $sqsDeleteMessageArgsTransfer->getQueueUrl(),
                'ReceiptHandle' => $sqsDeleteMessageArgsTransfer->getReceiptHandle(),
            ]);
    }

    /**
     * @param \Generated\Shared\Transfer\SqsChangeMessageVisibilityArgsTransfer $sqsChangeMessageVisibilityArgsTransfer
     *
     * @return void
     */
    public function changeMessageVisibility(SqsChangeMessageVisibilityArgsTransfer $sqsChangeMessageVisibilityArgsTransfer): void
    {
        $this->sqsClient
            ->changeMessageVisibility([
                'QueueUrl' => $sqsChangeMessageVisibilityArgsTransfer->getQueueUrl(),
                'ReceiptHandle' => $sqsChangeMessageVisibilityArgsTransfer->getReceiptHandle(),
                'VisibilityTimeout' => $sqsChangeMessageVisibilityArgsTransfer->getVisibilityTimeout(),
            ]);
    }

    /**
     * @param \Generated\Shared\Transfer\SqsChangeMessageVisibilityArgsTransfer $sqsChangeMessageVisibilityArgsTransfer
     *
     * @return void
     */
    public function changeMessageVisibilityAsync(SqsChangeMessageVisibilityArgsTransfer $sqsChangeMessageVisibilityArgsTransfer): void
    {
        $this->sqsClient
            ->changeMessageVisibilityAsync([
                'QueueUrl' => $sqsChangeMessageVisibilityArgsTransfer->getQueueUrl(),
                'ReceiptHandle' => $sqsChangeMessageVisibilityArgsTransfer->getReceiptHandle(),
                'VisibilityTimeout' => $sqsChangeMessageVisibilityArgsTransfer->getVisibilityTimeout(),
            ]);
    }

    /**
     * @param \Generated\Shared\Transfer\SqsGetQueueAttributesArgsTransfer $sqsGetQueueAttributesArgsTransfer
     *
     * @return \Aws\Result
     */
    public function getQueueAttributes(SqsGetQueueAttributesArgsTransfer $sqsGetQueueAttributesArgsTransfer): Result
    {
        return $this->sqsClient
            ->getQueueAttributes([
                'QueueUrl' => $sqsGetQueueAttributesArgsTransfer->getQueueUrl(),
                'AttributeNames' => $sqsGetQueueAttributesArgsTransfer->getAttributeNames(),
            ]);
    }
}
