<?php

namespace App\Providers;

use Illuminate\Queue\Queue;
use Illuminate\Contracts\Queue\Queue as QueueContract;

class UmqQueue extends Queue implements QueueContract
{
    public function push($job, $data = '', $queue = null)
    {
        // TODO: Implement push() method.
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