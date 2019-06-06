<?php

declare(strict_types=1);

namespace Gvidasr\ChannelsGroupPlugin\Entity;

use Sylius\Component\Core\Model\Channel as BaseChannel;

class Channel extends BaseChannel implements ChannelInterface
{
    private $channelGroup;

    public function getChannelGroup(): ?ChannelGroupInterface
    {
        return $this->channelGroup;
    }

    public function setChannelGroup(ChannelGroupInterface $channelGroup)
    {
        $this->channelGroup = $channelGroup;
    }


}
