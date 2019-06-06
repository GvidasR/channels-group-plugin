<?php

declare(strict_types=1);

namespace Gvidasr\ChannelsGroupPlugin\Form\Type;

use Sylius\Bundle\ResourceBundle\Form\EventSubscriber\AddCodeFormSubscriber;
use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

final class ChannelGroupType extends AbstractResourceType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('enabled', CheckboxType::class, [
                'label' => 'sylius.form.channel.enabled',
                'required' => false,
            ])
            ->add('name', TextType::class, [
                'label' => 'gvidasr_channels_group_plugin.ui.channel_group_name',
            ])
            ->add('sharedBasket', CheckboxType::class, [
                'label' => 'gvidasr_channels_group_plugin.ui.shared_basket',
                'required' => false,
            ])
        ;
    }

    public function getBlockPrefix(): string
    {
        return 'gvidasr_channels_group_plugin_channel_group';
    }
}
