# AWS SDK SQS

Container for AWS SDK SQS operations

### Install package
```
composer req valantic-cec/aws-sqs
```

### Update your shared config
```
$config[AwsSqsConstants::AWS_SQS_CONFIG_PARAM_REGION] = 'us-east-1';
$config[AwsSqsConstants::AWS_SQS_CONFIG_PARAM_VERSION] = 'latest';
$config[AwsSqsConstants::AWS_SQS_CONFIG_PARAM_ENDPOINT] = 'http://elasticmq:9324';
```

Username and password, if required
```
$config[AwsSqsConstants::AWS_SQS_CONFIG_PARAM_API_KEY] = 'key';
$config[AwsSqsConstants::AWS_SQS_CONFIG_PARAM_API_SECRET] = 'secret';
```

Or, if your are using AWS IAM roles
```
$config[AwsSqsConstants::AWS_SQS_CONFIG_PARAM_USE_IAM] = true;
```
