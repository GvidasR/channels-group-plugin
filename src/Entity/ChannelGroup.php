<?php

declare(strict_types=1);

namespace Gvidasr\ChannelsGroupPlugin\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Sylius\Component\Resource\Model\ToggleableTrait;

class ChannelGroup implements ChannelGroupInterface
{
    use ToggleableTrait;

    protected $id;

    protected $name;

    protected $sharedBasket = false;

    protected $channels;


    public function __construct()
    {
        $this->channels = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }


    public function getName(): ?string
    {
        return $this->name;
    }


    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function setSharedBasket(bool $sharedBasket): void
    {
        $this->sharedBasket = $sharedBasket;
    }


    public function isSharedBasket(): bool
    {
        return $this->sharedBasket;
    }


    public function getChannels(): Collection {
        return $this->channels;
    }


    public function addChannel(ChannelInterface $channel): void
    {
        if ($this->channels->contains($channel)) {
            return;
        }
        $this->channels->add($channel);
    }


    public function removeChannel(ChannelInterface $channel): void
    {
        if (!$this->channels->contains($channel)) {
            return;
        }
        $this->channels->removeElement($channel);
    }
}
