<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'morozovalexander/symfocommerce';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'cocur/slugify' => 'v1.4.1@16cdd7e792657d524cde931ea666436623b23301',
  'composer/ca-bundle' => '1.2.8@8a7ecad675253e4654ea05505233285377405215',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'doctrine/annotations' => '1.11.1@ce77a7ba1770462cd705a91a151b6c3746f9c6ad',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => 'v1.5.0@a01ee38fcd999f34d9bfbcee59dbda5105449cbf',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/data-fixtures' => '1.3.3@f0ee99c64922fc3f863715232b615c478a61b0a3',
  'doctrine/dbal' => 'v2.9.3@7345cd59edfa2036eb0fa4264b77ae2576842035',
  'doctrine/doctrine-bundle' => '1.12.2@9ac04186b47abda4759d0c304ab8f0780c470ac9',
  'doctrine/doctrine-cache-bundle' => '1.4.0@6bee2f9b339847e8a984427353670bad4e7bdccb',
  'doctrine/doctrine-fixtures-bundle' => '2.3.0@0f1a2f91b349e10f5c343f75ab71d23aace5b029',
  'doctrine/doctrine-migrations-bundle' => 'v1.3.2@49fa399181db4bf4f9f725126bd1cb65c4398dce',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.0.2@1febd6c3ef84253d7c815bed85fc622ad207a9f8',
  'doctrine/migrations' => 'v1.8.1@215438c0eef3e5f9b7da7d09c6b90756071b43e6',
  'doctrine/orm' => '2.7.4@7d84a4998091ece4d645253ac65de9f879eeed2f',
  'doctrine/persistence' => '1.3.8@7a6eac9fb6f61bba91328f15aa7547f4806ca288',
  'doctrine/reflection' => '1.2.2@fa587178be682efe90d005e3a322590d6ebb59a5',
  'fig/link-util' => '1.1.1@c038ee75ca13663ddc2d1f185fe6f7533c00832a',
  'friendsofsymfony/user-bundle' => '2.x-dev@b2e6a4d17fe5d97c4aff42c58e9528cd20566054',
  'hwi/oauth-bundle' => '0.5.3@50f4bcbe5c217cfdf0f7f40a174b87199b76d1e1',
  'imagine/imagine' => 'v0.7.1@a9a702a946073cbca166718f1b02a1e72d742daa',
  'incenteev/composer-parameter-handler' => 'v2.1.4@084befb11ec21faeadcddefb88b66132775ff59b',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'knplabs/knp-components' => 'v1.3.10@fc1755ba2b77f83a3d3c99e21f3026ba2a1429be',
  'knplabs/knp-paginator-bundle' => '2.5.1@5147740faff4d32e6f42acf64475314c35320fa4',
  'kriswallsmith/buzz' => '0.17.2@0d7e985003f074fca0ceb00bf2f650d749ae9710',
  'liip/imagine-bundle' => '1.9.1@3084c77e984ec669e0d645250a3cb1077d8b92f6',
  'monolog/monolog' => '1.25.5@1817faadd1846cd08be9a49e905dc68823bc38c0',
  'nyholm/psr7' => '1.3.2@a272953743c454ac4af9626634daaf5ab3ce1173',
  'ocramius/proxy-manager' => '2.1.1@e18ac876b2e4819c76349de8f78ccc8ef1554cd7',
  'oneup/uploader-bundle' => '1.9.4@8a6dc57c35e12fbc341e52e401a1d286475ec445',
  'paragonie/random_compat' => 'v2.0.19@446fc9faa5c2a9ddf65eb7121c0af7e857295241',
  'php-http/httplug' => 'v1.1.0@1c6381726c18579c4ca2ef1ec1498fdae8bdf018',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'php-http/promise' => '1.1.0@4c4c1f9b7289a2ec57cde7f1e9762a5789506f88',
  'presta/sitemap-bundle' => 'v1.4.2@62a78b9b70fece250799bcdb674e55ee86c68677',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-client' => '0.1.0@d4d3ec04b034120b0591ad9722a4c2be33a7dfec',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'sensio/distribution-bundle' => 'v5.0.25@80a38234bde8321fb92aa0b8c27978a272bb4baf',
  'sensio/framework-extra-bundle' => 'v3.0.29@bb907234df776b68922eb4b25bfa061683597b6a',
  'sensiolabs/security-checker' => 'v5.0.3@46be3f58adac13084497961e10eed9a7fb4d44d1',
  'swiftmailer/swiftmailer' => 'v5.4.12@181b89f18a90f8925ef805f950d47a7190e9b950',
  'symfony/monolog-bundle' => 'v2.12.1@b0146bdca7ba2a65f3bbe7010423c7393b29ec3f',
  'symfony/polyfill-apcu' => 'v1.20.0@f5191eb0e98e08d12eb49fc0ed0820e37de89fdf',
  'symfony/polyfill-ctype' => 'v1.20.0@f4ba089a5b6366e453971d3aad5fe8e897b37f41',
  'symfony/polyfill-intl-icu' => 'v1.20.0@c44d5bf6a75eed79555c6bf37505c6d39559353e',
  'symfony/polyfill-mbstring' => 'v1.20.0@39d483bdf39be819deabf04ec872eb0b2410b531',
  'symfony/polyfill-php56' => 'v1.20.0@54b8cd7e6c1643d78d011f3be89f3ef1f9f4c675',
  'symfony/polyfill-php70' => 'v1.20.0@5f03a781d984aae42cebd18e7912fa80f02ee644',
  'symfony/swiftmailer-bundle' => 'v2.6.7@c4808f5169efc05567be983909d00f00521c53ec',
  'symfony/symfony' => 'v3.4.46@8cd680e4db34bedbe79f1cb306456dde77adf6b6',
  'twig/twig' => 'v2.12.5@18772e0190734944277ee97a02a9a6c6555fcd94',
  'yellowskies/qr-code-bundle' => '1.2.8@187c1c82e0d79c5f0ea47fb356c5447cb6409a54',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'sensio/generator-bundle' => 'v3.1.7@28cbaa244bd0816fd8908b93f90380bcd7b67a65',
  'symfony/phpunit-bridge' => 'v3.4.46@8d05c61270c40f457e0fc11d47cc112c0f2e3606',
  'morozovalexander/symfocommerce' => 'dev-main@ce668a799db875e5ef5dc0e6ddc69f84ca6450ca',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
