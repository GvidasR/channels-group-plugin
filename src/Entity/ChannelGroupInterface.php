<?php

declare(strict_types=1);

namespace Gvidasr\ChannelsGroupPlugin\Entity;

use Doctrine\Common\Collections\Collection;
use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\ToggleableInterface;

interface ChannelGroupInterface extends ResourceInterface, ToggleableInterface
{

    public function getName(): ?string;
    public function setName(string $name): void;

    public function setSharedBasket(bool $sharedBasket): void;
    public function isSharedBasket(): bool;


    /**
     * @return Collection|ChannelInterface[]
     */
    public function getChannels(): Collection;
    public function addChannel(ChannelInterface $channel): void;
    public function removeChannel(ChannelInterface $channel): void;
}
