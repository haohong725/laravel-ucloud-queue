<?php

namespace Umq;

use Illuminate\Queue\Queue;
use Illuminate\Contracts\Queue\Queue as QueueContract;
use Umq\SDK\UmqClient;

class UmqQueue extends Queue implements QueueContract
{
    /**
     * The ucloud queue instance.
     *
     * @var SDK\UmqClient
     */
    protected $umq;

    /**
     * Create a new Amazon SQS queue instance.
     *
     * @param  \Aws\Sqs\SqsClient  $sqs
     * @param  string  $default
     * @param  string  $prefix
     * @return void
     */
    public function __construct(UmqClient $umq)
    {
        $this->umq = $umq;
    }

    public function push($job, $data = '', $queue = null)
    {

    }

    public function pushRaw($payload, $queue = null, array $options = [])
    {
        // TODO: Implement pushRaw() method.
    }

    public function later($delay, $job, $data = '', $queue = null)
    {
        // TODO: Implement later() method.
    }

    public function pushOn($queue, $job, $data = '')
    {
        return parent::pushOn($queue, $job, $data); // TODO: Change the autogenerated stub
    }

    public function laterOn($queue, $delay, $job, $data = '')
    {
        return parent::laterOn($queue, $delay, $job, $data); // TODO: Change the autogenerated stub
    }

    public function pop($queue = null)
    {
        // TODO: Implement pop() method.
    }
}