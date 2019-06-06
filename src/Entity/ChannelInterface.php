<?php

declare(strict_types=1);

namespace Gvidasr\ChannelsGroupPlugin\Entity;

use Sylius\Component\Core\Model\ChannelInterface as BaseChannelInterface;

interface ChannelInterface extends BaseChannelInterface
{
    public function getChannelGroup(): ?ChannelGroupInterface;
}
