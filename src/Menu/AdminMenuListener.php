<?php

namespace Gvidasr\ChannelsGroupPlugin\Menu;

use Knp\Menu\Util\MenuManipulator;
use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $newSubmenu = $menu
            ->getChild('configuration')
            ->addChild('channel_groups', [
                'route' => 'gvidasr_channels_group_plugin_admin_channel_group_index',
            ])
            ->setLabel('gvidasr_channels_group_plugin.ui.channel_groups')
            ->setLabelAttribute('icon', 'folder open');

        $manipulator = new MenuManipulator();
        $manipulator->moveToPosition($newSubmenu,1);
    }
}
