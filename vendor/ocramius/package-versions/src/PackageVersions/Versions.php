<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'doctrine/annotations' => 'v1.8.0@904dca4eb10715b92569fbcd79e201d5c349b6bc',
  'doctrine/cache' => '1.10.0@382e7f4db9a12dc6c19431743a2b096041bcdd62',
  'doctrine/collections' => '1.6.4@6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7',
  'doctrine/common' => '2.12.0@2053eafdf60c2172ee1373d1b9289ba1db7f1fc6',
  'doctrine/dbal' => 'v2.10.1@c2b8e6e82732a64ecde1cddf9e1e06cb8556e3d8',
  'doctrine/doctrine-bundle' => '2.0.7@6926771140ee87a823c3b2c72602de9dda4490d3',
  'doctrine/doctrine-migrations-bundle' => '2.1.2@856437e8de96a70233e1f0cc2352fc8dd15a899d',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'doctrine/migrations' => '2.2.1@a3987131febeb0e9acb3c47ab0df0af004588934',
  'doctrine/orm' => 'v2.7.1@445796af0e873d9bd04f2502d322a7d5009b6846',
  'doctrine/persistence' => '1.3.6@5dd3ac5eebef2d0b074daa4440bb18f93132dee4',
  'doctrine/reflection' => 'v1.1.0@bc420ead87fdfe08c03ecc3549db603a45b06d4c',
  'egulias/email-validator' => '2.1.17@ade6887fd9bd74177769645ab5c474824f8a418a',
  'imagine/imagine' => '1.2.3@cb2361e5bb4410b681462d8e4f912bc5dabf84ab',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'liip/imagine-bundle' => '2.3.0@06740a0a0e9c0054d3e0589472fd19b975784c52',
  'monolog/monolog' => '1.25.3@fa82921994db851a8becaf3787a9e73c5976b6f1',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'phpdocumentor/reflection-common' => '2.0.0@63a995caa1ca9e5590304cd845c15ad6d482a62a',
  'phpdocumentor/reflection-docblock' => '4.3.4@da3fd972d6bafd628114f7e7e036f45944b62e9c',
  'phpdocumentor/type-resolver' => '1.1.0@7462d5f123dfc080dfdf26897032a6513644fc95',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.2@446d54b4cb6bf489fc9d75f55843658e6f25d801',
  'sensio/framework-extra-bundle' => 'v5.5.4@d0585d4825a87a5030ca8cd34adb4a17e1066c17',
  'symfony/asset' => 'v4.4.6@eb7c4595302888ee82b78acb90cc79cf4c3f213e',
  'symfony/cache' => 'v4.4.5@28511cbd8c760a19f4b4b70961d2cd957733b3d9',
  'symfony/cache-contracts' => 'v2.0.1@23ed8bfc1a4115feca942cb5f1aacdf3dcdf3c16',
  'symfony/config' => 'v4.4.5@cbfef5ae91ccd3b06621c18d58cd355c68c87ae9',
  'symfony/console' => 'v4.4.5@4fa15ae7be74e53f6ec8c83ed403b97e23b665e9',
  'symfony/debug' => 'v4.4.5@a980d87a659648980d89193fd8b7a7ca89d97d21',
  'symfony/dependency-injection' => 'v4.4.5@ebb2e882e8c9e2eb990aa61ddcd389848466e342',
  'symfony/doctrine-bridge' => 'v4.4.5@1b4564758fe91f5d53dfbdfd9007d15e43fa465f',
  'symfony/dotenv' => 'v4.4.5@9bba981ecb1f57c04520d4165b3e6a17ac49319f',
  'symfony/error-handler' => 'v4.4.5@89aa4b9ac6f1f35171b8621b24f60477312085be',
  'symfony/event-dispatcher' => 'v4.4.5@4ad8e149799d3128621a3a1f70e92b9897a8930d',
  'symfony/event-dispatcher-contracts' => 'v1.1.7@c43ab685673fb6c8d84220c77897b1d6cdbe1d18',
  'symfony/expression-language' => 'v4.4.5@70649e0abcac6ad1109f6243886bca0445e278b9',
  'symfony/filesystem' => 'v4.4.5@266c9540b475f26122b61ef8b23dd9198f5d1cfd',
  'symfony/finder' => 'v4.4.5@ea69c129aed9fdeca781d4b77eb20b62cf5d5357',
  'symfony/flex' => 'v1.6.2@e4f5a2653ca503782a31486198bd1dd1c9a47f83',
  'symfony/form' => 'v4.4.5@677927dad3b9f93117db62fc1df4de82027dc282',
  'symfony/framework-bundle' => 'v4.4.5@df5528926e6e1954975f3d73a91f029ba3d9c76b',
  'symfony/http-client' => 'v4.4.5@65ccb6ca4a5a7bf7c244b8a28195fa188521b3d2',
  'symfony/http-client-contracts' => 'v2.0.1@378868b61b85c5cac6822d4f84e26999c9f2e881',
  'symfony/http-foundation' => 'v4.4.5@7e41b4fcad4619535f45f8bfa7744c4f384e1648',
  'symfony/http-kernel' => 'v4.4.5@8c8734486dada83a6041ab744709bdc1651a8462',
  'symfony/inflector' => 'v4.4.5@f419ab2853cc00471ffd7fc18e544b5f5a90adb1',
  'symfony/intl' => 'v4.4.5@f675f139e20b9e0ff05bac662c081fe9ef7b2f88',
  'symfony/mailer' => 'v4.4.5@f79a2cc091c14c2d78cade2f8b772f568fb63c43',
  'symfony/mime' => 'v4.4.5@304db017bafd71c122cd5223a9ac2d03dc24da32',
  'symfony/monolog-bridge' => 'v4.4.5@b14ee2f0488b3ad879fd000bc3dcce1cd2f6cfff',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/options-resolver' => 'v4.4.5@9a02d6662660fe7bfadad63b5f0b0718d4c8b6b0',
  'symfony/orm-pack' => 'v1.0.8@c9bcc08102061f406dc908192c0f33524a675666',
  'symfony/polyfill-intl-icu' => 'v1.14.0@727b3bb5bfa7ca9eeb86416784cf1c08a6289b86',
  'symfony/polyfill-intl-idn' => 'v1.14.0@6842f1a39cf7d580655688069a03dd7cd83d244a',
  'symfony/polyfill-mbstring' => 'v1.14.0@34094cfa9abe1f0f14f48f490772db7a775559f2',
  'symfony/polyfill-php72' => 'v1.14.0@46ecacf4751dd0dc81e4f6bf01dbf9da1dc1dadf',
  'symfony/polyfill-php73' => 'v1.14.0@5e66a0fa1070bf46bec4bea7962d285108edd675',
  'symfony/process' => 'v4.4.5@bf9166bac906c9e69fb7a11d94875e7ced97bcd7',
  'symfony/property-access' => 'v4.4.5@090b4bc92ded1ec512f7e2ed1691210769dffdb3',
  'symfony/property-info' => 'v4.4.5@e6355ba81c738be31c3c3b3cd7929963f98da576',
  'symfony/routing' => 'v4.4.5@4124d621d0e445732520037f888a0456951bde8c',
  'symfony/security-bundle' => 'v4.4.5@21c4270b37f76e6c3c22f92597f397593ed1c9db',
  'symfony/security-core' => 'v4.4.5@6251c8e432640106e6f2f045ac3b365f1af36d44',
  'symfony/security-csrf' => 'v4.4.5@da4664d94164e2b50ce75f2453724c6c33222505',
  'symfony/security-guard' => 'v4.4.5@7dcc99e3fa89387a1914496118b4aa0927f282e1',
  'symfony/security-http' => 'v4.4.5@c38fe1cd72360dfaa39c82fcb9e4666b041f8834',
  'symfony/serializer' => 'v4.4.5@bc76d242fea5ff09c3ca34c90f3bb9341a2470a4',
  'symfony/serializer-pack' => 'v1.0.2@c5f18ba4ff989a42d7d140b7f85406e77cd8c4b2',
  'symfony/service-contracts' => 'v2.0.1@144c5e51266b281231e947b51223ba14acf1a749',
  'symfony/stopwatch' => 'v4.4.5@abc08d7c48987829bac301347faa10f7e8bbf4fb',
  'symfony/templating' => 'v4.4.5@9995a4f65149d5ab7f0d9cca6d88136ae8bfaa72',
  'symfony/translation' => 'v4.4.5@0a19a77fba20818a969ef03fdaf1602de0546353',
  'symfony/translation-contracts' => 'v2.0.1@8cc682ac458d75557203b2f2f14b0b92e1c744ed',
  'symfony/twig-bridge' => 'v4.4.5@e76e963d8aeb1370a1236ca237a8028141402fc0',
  'symfony/twig-bundle' => 'v4.4.5@d3e3e46e9e683e946746219570299ba07506260a',
  'symfony/twig-pack' => 'v1.0.0@8b278ea4b61fba7c051f172aacae6d87ef4be0e0',
  'symfony/validator' => 'v4.4.5@3a3a07fe2f42492eccca6771f1a460c9900cd851',
  'symfony/var-dumper' => 'v4.4.5@2572839911702b0405479410ea7a1334bfab0b96',
  'symfony/var-exporter' => 'v4.4.5@1a76a943f2af334da13bc9f33f49392fa530eec9',
  'symfony/web-link' => 'v4.4.5@dad60d94b2e7f16e1a7d0ebd0f1f460f45a51386',
  'symfony/webpack-encore-bundle' => 'v1.7.3@5c0f659eceae87271cce54bbdfb05ed8ec9007bd',
  'symfony/yaml' => 'v4.4.5@94d005c176db2080e98825d98e01e8b311a97a88',
  'twig/extra-bundle' => 'v3.0.3@6eaf1637abe6b68518e7e0949ebb84e55770d5c6',
  'twig/twig' => 'v3.0.3@3b88ccd180a6b61ebb517aea3b1a8906762a1dc2',
  'webmozart/assert' => '1.7.0@aed98a490f9a8f78468232db345ab9cf606cf598',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'easycorp/easy-log-handler' => 'v1.0.9@224e1dfcf9455aceee89cd0af306ac097167fac1',
  'nikic/php-parser' => 'v4.3.0@9a9981c347c5c49d6dfe5cf826bb882b824080dc',
  'symfony/browser-kit' => 'v4.4.5@090ce406505149d6852a7c03b0346dec3b8cf612',
  'symfony/css-selector' => 'v4.4.5@d0a6dd288fa8848dcc3d1f58b94de6a7cc5d2d22',
  'symfony/debug-bundle' => 'v4.4.5@570c3c69e69f7709f184ee3acbebe45e5ff1adce',
  'symfony/debug-pack' => 'v1.0.7@09a4a1e9bf2465987d4f79db0ad6c11cc632bc79',
  'symfony/dom-crawler' => 'v4.4.5@11dcf08f12f29981bf770f097a5d64d65bce5929',
  'symfony/maker-bundle' => 'v1.14.6@bc4df88792fbaaeb275167101dc714218475db5f',
  'symfony/phpunit-bridge' => 'v5.0.5@b8fee53045a55ccbb9209e453bf6fdcf74381959',
  'symfony/profiler-pack' => 'v1.0.4@99c4370632c2a59bb0444852f92140074ef02209',
  'symfony/test-pack' => 'v1.0.6@ff87e800a67d06c423389f77b8209bc9dc469def',
  'symfony/web-profiler-bundle' => 'v4.4.5@76c21d0137f0b9c6bbbc93ac2672cadfdf2e625a',
  'symfony/web-server-bundle' => 'v4.4.5@92a37564d8577f01a21e7a77dab2f4fcad32f4ba',
  'paragonie/random_compat' => '2.*@3f0e2a9bb243f63e10ad616001377c401620fe9b',
  'symfony/polyfill-ctype' => '*@3f0e2a9bb243f63e10ad616001377c401620fe9b',
  'symfony/polyfill-iconv' => '*@3f0e2a9bb243f63e10ad616001377c401620fe9b',
  'symfony/polyfill-php71' => '*@3f0e2a9bb243f63e10ad616001377c401620fe9b',
  'symfony/polyfill-php70' => '*@3f0e2a9bb243f63e10ad616001377c401620fe9b',
  'symfony/polyfill-php56' => '*@3f0e2a9bb243f63e10ad616001377c401620fe9b',
  '__root__' => 'dev-master@3f0e2a9bb243f63e10ad616001377c401620fe9b',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}