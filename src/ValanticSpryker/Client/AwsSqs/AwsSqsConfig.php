<?php declare(strict_types = 1);

namespace ValanticSpryker\Client\AwsSqs;

use Aws\Credentials\CredentialProvider;
use Aws\Credentials\Credentials;
use Aws\Credentials\CredentialsInterface;
use Spryker\Client\Kernel\AbstractBundleConfig;
use ValanticSpryker\Shared\AwsSqs\AwsSqsConstants;

class AwsSqsConfig extends AbstractBundleConfig
{
    /**
     * @var string
     */
    public const AWS_SQS_CLIENT_CONFIG_KEY_REGION = 'region';

    /**
     * @var string
     */
    public const AWS_SQS_CLIENT_CONFIG_KEY_VERSION = 'version';

    /**
     * @var string
     */
    public const AWS_SQS_CLIENT_CONFIG_KEY_ENDPOINT = 'endpoint';

    /**
     * @var string
     */
    public const AWS_SQS_CLIENT_CONFIG_KEY_CREDENTIALS = 'credentials';

    /**
     * @return array
     */
    public function getAwsClientConfiguration(): array
    {
        return [
            self::AWS_SQS_CLIENT_CONFIG_KEY_ENDPOINT => $this->getAwsApiEndpoint(),
            self::AWS_SQS_CLIENT_CONFIG_KEY_REGION => $this->getAwsRegion(),
            self::AWS_SQS_CLIENT_CONFIG_KEY_VERSION => $this->getAwsApiVersion(),
            self::AWS_SQS_CLIENT_CONFIG_KEY_CREDENTIALS => $this->createCredentialsProvider(),
        ];
    }

    /**
     * @return string
     */
    public function getAwsRegion(): string
    {
        return $this->get(AwsSqsConstants::AWS_SQS_CONFIG_PARAM_REGION, 'us-east-1');
    }

    /**
     * @return string
     */
    public function getAwsApiVersion(): string
    {
        return $this->get(AwsSqsConstants::AWS_SQS_CONFIG_PARAM_VERSION, 'latest');
    }

    /**
     * @return string|null
     */
    public function getAwsApiEndpoint(): ?string
    {
        return $this->get(AwsSqsConstants::AWS_SQS_CONFIG_PARAM_ENDPOINT);
    }

    /**
     * @return string|null
     */
    public function getAwsApiKey(): ?string
    {
        return $this->get(AwsSqsConstants::AWS_SQS_CONFIG_PARAM_API_KEY);
    }

    /**
     * @return string|null
     */
    public function getAwsApiSecret(): ?string
    {
        return $this->get(AwsSqsConstants::AWS_SQS_CONFIG_PARAM_API_SECRET);
    }

    /**
     * @return bool
     */
    public function useIamRole(): bool
    {
        return $this->get(AwsSqsConstants::AWS_SQS_CONFIG_PARAM_USE_IAM, false);
    }

    /**
     * @return callable
     */
    public function createCredentialsProvider(): callable
    {
        if ($this->useIamRole()) {
            return CredentialProvider::memoize(CredentialProvider::assumeRoleWithWebIdentityCredentialProvider());
        }

        return CredentialProvider::memoize(CredentialProvider::fromCredentials($this->createCredentials()));
    }

    /**
     * @return \Aws\Credentials\CredentialsInterface
     */
    public function createCredentials(): CredentialsInterface
    {
        return new Credentials(
            $this->getAwsApiKey(),
            $this->getAwsApiSecret(),
        );
    }
}
