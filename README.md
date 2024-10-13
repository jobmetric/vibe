# Vibe

A dynamic CRM platform designed to `enhance` customer relationships, `streamline interactions`, and `foster` a positive engagement experience for `businesses`.

## Install via composer

Run the following command to pull in the latest version:

```bash
composer require jobmetric/vibe
```

### Publish the config
Copy the `config` file from `vendor/jobmetric/vibe/config/config.php` to `config` folder of your Laravel application and rename it to `vibe.php`

Run the following command to publish the package config file:

```bash
php artisan vendor:publish --provider="JobMetric\Vibe\VibeServiceProvider" --tag="vibe-config"
```

You should now have a `config/vibe.php` file that allows you to configure the basics of this package.

## Documentation

coming soon...
