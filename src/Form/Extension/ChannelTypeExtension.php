<?php

declare(strict_types=1);

namespace Gvidasr\ChannelsGroupPlugin\Form\Extension;

use Gvidasr\ChannelsGroupPlugin\Entity\ChannelGroup;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractTypeExtension;
use Sylius\Bundle\ChannelBundle\Form\Type\ChannelType;
use Symfony\Component\Form\FormBuilderInterface;

final class ChannelTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        parent::buildForm($builder, $options);
        $builder->add('channelGroup', EntityType::class, [
            'class' => ChannelGroup::class,
            'choice_value' => 'id',
            'choice_label' => 'name',
            'placeholder' => 'sylius.form.zone.select',
            'label' => 'gvidasr_channels_group_plugin.ui.channel_group',
        ]);
    }

    public function getExtendedTypes(): Array
    {
        return [ChannelType::class];
    }
}
