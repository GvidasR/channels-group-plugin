<p align="center">
    <a href="https://sylius.com" target="_blank">
        <img src="https://demo.sylius.com/assets/shop/img/logo.png" />
    </a>
</p>

<h1 align="center">Channels group plugin</h1>

## Installation

Update composer.json file with new dependency
```bash
"repositories": [
        {
            "name" : "channels-group-plugin", 
            "type" : "git",
            "url" : "https://github.com/GvidasR/channels-group-plugin.git"
        }   
    ],

    "require": {
        "gvidasr/channels-group-plugin" : "*"
    },
```

Copy database migrations & template overrides to existing Sylius installation
```bash
cp -R vendor/gvidasr/channels-group-plugin/Migrations/* src/Migrations
mkdir -p templates/bundles/SyliusAdminBundle
cp -R vendor/gvidasr/channels-group-plugin/src/Resources/views/SyliusAdminBundle/* templates/bundles/SyliusAdminBundle
```

Update database
```bash
php bin/console doctrine:migrations:migrate
```

Add plugin dependencies to your config/bundles.php file:
```php
return [
    Gvidasr\ChannelsGroupPlugin\GvidasrChannelsGroupPlugin::class => ['all' => true],
]
```

## Testing

```bash
composer install
cd tests/Application
yarn install
yarn run gulp
php bin/console sylius:install --env test
php bin/console server:start --env test
```

If `yarn run gulp` command fails try creating new `node_modules` symbolic link
