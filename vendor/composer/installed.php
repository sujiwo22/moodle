<?php return array(
    'root' => array(
        'name' => 'moodle/moodle',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'behat/behat' => array(
            'pretty_version' => 'v3.11.0',
            'version' => '3.11.0.0',
            'reference' => 'a19c72c78eb0cdf7b7c4dabfeec9eb3a282728fc',
            'type' => 'library',
            'install_path' => __DIR__ . '/../behat/behat',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'behat/gherkin' => array(
            'pretty_version' => 'v4.9.0',
            'version' => '4.9.0.0',
            'reference' => '0bc8d1e30e96183e4f36db9dc79caead300beff4',
            'type' => 'library',
            'install_path' => __DIR__ . '/../behat/gherkin',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'behat/mink' => array(
            'pretty_version' => 'v1.10.0',
            'version' => '1.10.0.0',
            'reference' => '19e58905632e7cfdc5b2bafb9b950a3521af32c5',
            'type' => 'library',
            'install_path' => __DIR__ . '/../behat/mink',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'behat/mink-browserkit-driver' => array(
            'pretty_version' => 'v1.4.1',
            'version' => '1.4.1.0',
            'reference' => '057926c9da452bac5bfcffb92eb4f3e1ce74dae9',
            'type' => 'mink-driver',
            'install_path' => __DIR__ . '/../behat/mink-browserkit-driver',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'behat/mink-extension' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => '2.1.x-dev',
                1 => 'dev-master',
            ),
        ),
        'behat/mink-goutte-driver' => array(
            'pretty_version' => 'v1.3.0',
            'version' => '1.3.0.0',
            'reference' => '8139f520f417c81bf9d2f9a171fff400f6adc9ea',
            'type' => 'mink-driver',
            'install_path' => __DIR__ . '/../behat/mink-goutte-driver',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'behat/transliterator' => array(
            'pretty_version' => 'v1.5.0',
            'version' => '1.5.0.0',
            'reference' => 'baac5873bac3749887d28ab68e2f74db3a4408af',
            'type' => 'library',
            'install_path' => __DIR__ . '/../behat/transliterator',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'doctrine/instantiator' => array(
            'pretty_version' => '1.4.1',
            'version' => '1.4.1.0',
            'reference' => '10dcfce151b967d20fde1b34ae6640712c3891bc',
            'type' => 'library',
            'install_path' => __DIR__ . '/../doctrine/instantiator',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'fabpot/goutte' => array(
            'pretty_version' => 'v3.3.1',
            'version' => '3.3.1.0',
            'reference' => '80a23b64f44d54dd571d114c473d9d7e9ed84ca5',
            'type' => 'application',
            'install_path' => __DIR__ . '/../fabpot/goutte',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'facebook/webdriver' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'friends-of-behat/mink-extension' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '586ffcc1dc08ed23fcbc89cb16cb6f72d40499f3',
            'type' => 'behat-extension',
            'install_path' => __DIR__ . '/../friends-of-behat/mink-extension',
            'aliases' => array(
                0 => '2.1.x-dev',
            ),
            'dev_requirement' => true,
        ),
        'guzzlehttp/guzzle' => array(
            'pretty_version' => '6.5.8',
            'version' => '6.5.8.0',
            'reference' => 'a52f0440530b54fa079ce76e8c5d196a42cad981',
            'type' => 'library',
            'install_path' => __DIR__ . '/../guzzlehttp/guzzle',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'guzzlehttp/promises' => array(
            'pretty_version' => '1.5.2',
            'version' => '1.5.2.0',
            'reference' => 'b94b2807d85443f9719887892882d0329d1e2598',
            'type' => 'library',
            'install_path' => __DIR__ . '/../guzzlehttp/promises',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'guzzlehttp/psr7' => array(
            'pretty_version' => '1.9.0',
            'version' => '1.9.0.0',
            'reference' => 'e98e3e6d4f86621a9b75f623996e6bbdeb4b9318',
            'type' => 'library',
            'install_path' => __DIR__ . '/../guzzlehttp/psr7',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'llagerlof/moodlerest' => array(
            'pretty_version' => '2.4.0',
            'version' => '2.4.0.0',
            'reference' => '3fb24a0dd494d8dbbac70999b26627ce4ee63ac4',
            'type' => 'library',
            'install_path' => __DIR__ . '/../llagerlof/moodlerest',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'mikey179/vfsstream' => array(
            'pretty_version' => 'v1.6.11',
            'version' => '1.6.11.0',
            'reference' => '17d16a85e6c26ce1f3e2fa9ceeacdc2855db1e9f',
            'type' => 'library',
            'install_path' => __DIR__ . '/../mikey179/vfsstream',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'moodle/moodle' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'myclabs/deep-copy' => array(
            'pretty_version' => '1.11.0',
            'version' => '1.11.0.0',
            'reference' => '14daed4296fae74d9e3201d2c4925d1acb7aa614',
            'type' => 'library',
            'install_path' => __DIR__ . '/../myclabs/deep-copy',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'nikic/php-parser' => array(
            'pretty_version' => 'v4.15.1',
            'version' => '4.15.1.0',
            'reference' => '0ef6c55a3f47f89d7a374e6f835197a0b5fcf900',
            'type' => 'library',
            'install_path' => __DIR__ . '/../nikic/php-parser',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'oleg-andreyev/mink-phpwebdriver' => array(
            'pretty_version' => 'v1.2.0',
            'version' => '1.2.0.0',
            'reference' => 'c64d82ed16f2ccf4f21fd475e1c4b1105e8350af',
            'type' => 'mink-driver',
            'install_path' => __DIR__ . '/../oleg-andreyev/mink-phpwebdriver',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'phar-io/manifest' => array(
            'pretty_version' => '2.0.3',
            'version' => '2.0.3.0',
            'reference' => '97803eca37d319dfa7826cc2437fc020857acb53',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phar-io/manifest',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'phar-io/version' => array(
            'pretty_version' => '3.2.1',
            'version' => '3.2.1.0',
            'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phar-io/version',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'php-webdriver/webdriver' => array(
            'pretty_version' => '1.13.1',
            'version' => '1.13.1.0',
            'reference' => '6dfe5f814b796c1b5748850aa19f781b9274c36c',
            'type' => 'library',
            'install_path' => __DIR__ . '/../php-webdriver/webdriver',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => array(
            'pretty_version' => '9.2.18',
            'version' => '9.2.18.0',
            'reference' => '12fddc491826940cf9b7e88ad9664cf51f0f6d0a',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpunit/php-code-coverage',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => array(
            'pretty_version' => '3.0.6',
            'version' => '3.0.6.0',
            'reference' => 'cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpunit/php-file-iterator',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => array(
            'pretty_version' => '3.1.1',
            'version' => '3.1.1.0',
            'reference' => '5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpunit/php-invoker',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => array(
            'pretty_version' => '2.0.4',
            'version' => '2.0.4.0',
            'reference' => '5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpunit/php-text-template',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'phpunit/php-timer' => array(
            'pretty_version' => '5.0.3',
            'version' => '5.0.3.0',
            'reference' => '5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpunit/php-timer',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'phpunit/phpunit' => array(
            'pretty_version' => '9.5.26',
            'version' => '9.5.26.0',
            'reference' => '851867efcbb6a1b992ec515c71cdcf20d895e9d2',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpunit/phpunit',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'psr/container' => array(
            'pretty_version' => '1.1.1',
            'version' => '1.1.1.0',
            'reference' => '8622567409010282b7aeebe4bb841fe98b58dcaf',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/container',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'psr/container-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.0',
            ),
        ),
        'psr/event-dispatcher' => array(
            'pretty_version' => '1.0.0',
            'version' => '1.0.0.0',
            'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/event-dispatcher',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'psr/event-dispatcher-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.0',
            ),
        ),
        'psr/http-message' => array(
            'pretty_version' => '1.0.1',
            'version' => '1.0.1.0',
            'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/http-message',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'psr/http-message-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.0',
            ),
        ),
        'psr/log-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.0|2.0',
            ),
        ),
        'ralouphie/getallheaders' => array(
            'pretty_version' => '3.0.3',
            'version' => '3.0.3.0',
            'reference' => '120b605dfeb996808c31b6477290a714d356e822',
            'type' => 'library',
            'install_path' => __DIR__ . '/../ralouphie/getallheaders',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'sebastian/cli-parser' => array(
            'pretty_version' => '1.0.1',
            'version' => '1.0.1.0',
            'reference' => '442e7c7e687e42adc03470c7b668bc4b2402c0b2',
            'type' => 'library',
            'install_path' => __DIR__ . '/../sebastian/cli-parser',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'sebastian/code-unit' => array(
            'pretty_version' => '1.0.8',
            'version' => '1.0.8.0',
            'reference' => '1fc9f64c0927627ef78ba436c9b17d967e68e120',
            'type' => 'library',
            'install_path' => __DIR__ . '/../sebastian/code-unit',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => array(
            'pretty_version' => '2.0.3',
            'version' => '2.0.3.0',
            'reference' => 'ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
            'type' => 'library',
            'install_path' => __DIR__ . '/../sebastian/code-unit-reverse-lookup',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'sebastian/comparator' => array(
            'pretty_version' => '4.0.8',
            'version' => '4.0.8.0',
            'reference' => 'fa0f136dd2334583309d32b62544682ee972b51a',
            'type' => 'library',
            'install_path' => __DIR__ . '/../sebastian/comparator',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'sebastian/complexity' => array(
            'pretty_version' => '2.0.2',
            'version' => '2.0.2.0',
            'reference' => '739b35e53379900cc9ac327b2147867b8b6efd88',
            'type' => 'library',
            'install_path' => __DIR__ . '/../sebastian/complexity',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'sebastian/diff' => array(
            'pretty_version' => '4.0.4',
            'version' => '4.0.4.0',
            'reference' => '3461e3fccc7cfdfc2720be910d3bd73c69be590d',
            'type' => 'library',
            'install_path' => __DIR__ . '/../sebastian/diff',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'sebastian/environment' => array(
            'pretty_version' => '5.1.4',
            'version' => '5.1.4.0',
            'reference' => '1b5dff7bb151a4db11d49d90e5408e4e938270f7',
            'type' => 'library',
            'install_path' => __DIR__ . '/../sebastian/environment',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'sebastian/exporter' => array(
            'pretty_version' => '4.0.5',
            'version' => '4.0.5.0',
            'reference' => 'ac230ed27f0f98f597c8a2b6eb7ac563af5e5b9d',
            'type' => 'library',
            'install_path' => __DIR__ . '/../sebastian/exporter',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'sebastian/global-state' => array(
            'pretty_version' => '5.0.5',
            'version' => '5.0.5.0',
            'reference' => '0ca8db5a5fc9c8646244e629625ac486fa286bf2',
            'type' => 'library',
            'install_path' => __DIR__ . '/../sebastian/global-state',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => array(
            'pretty_version' => '1.0.3',
            'version' => '1.0.3.0',
            'reference' => 'c1c2e997aa3146983ed888ad08b15470a2e22ecc',
            'type' => 'library',
            'install_path' => __DIR__ . '/../sebastian/lines-of-code',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => array(
            'pretty_version' => '4.0.4',
            'version' => '4.0.4.0',
            'reference' => '5c9eeac41b290a3712d88851518825ad78f45c71',
            'type' => 'library',
            'install_path' => __DIR__ . '/../sebastian/object-enumerator',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => array(
            'pretty_version' => '2.0.4',
            'version' => '2.0.4.0',
            'reference' => 'b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
            'type' => 'library',
            'install_path' => __DIR__ . '/../sebastian/object-reflector',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => array(
            'pretty_version' => '4.0.4',
            'version' => '4.0.4.0',
            'reference' => 'cd9d8cf3c5804de4341c283ed787f099f5506172',
            'type' => 'library',
            'install_path' => __DIR__ . '/../sebastian/recursion-context',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'sebastian/resource-operations' => array(
            'pretty_version' => '3.0.3',
            'version' => '3.0.3.0',
            'reference' => '0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
            'type' => 'library',
            'install_path' => __DIR__ . '/../sebastian/resource-operations',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'sebastian/type' => array(
            'pretty_version' => '3.2.0',
            'version' => '3.2.0.0',
            'reference' => 'fb3fe09c5f0bae6bc27ef3ce933a1e0ed9464b6e',
            'type' => 'library',
            'install_path' => __DIR__ . '/../sebastian/type',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'sebastian/version' => array(
            'pretty_version' => '3.0.2',
            'version' => '3.0.2.0',
            'reference' => 'c6c1022351a901512170118436c764e473f6de8c',
            'type' => 'library',
            'install_path' => __DIR__ . '/../sebastian/version',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/browser-kit' => array(
            'pretty_version' => 'v4.4.44',
            'version' => '4.4.44.0',
            'reference' => '2a1ff40723ef6b29c8229a860a9c8f815ad7dbbb',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/browser-kit',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/config' => array(
            'pretty_version' => 'v5.4.11',
            'version' => '5.4.11.0',
            'reference' => 'ec79e03125c1d2477e43dde8528535d90cc78379',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/config',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/console' => array(
            'pretty_version' => 'v5.4.15',
            'version' => '5.4.15.0',
            'reference' => 'ea59bb0edfaf9f28d18d8791410ee0355f317669',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/console',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/css-selector' => array(
            'pretty_version' => 'v5.4.11',
            'version' => '5.4.11.0',
            'reference' => 'c1681789f059ab756001052164726ae88512ae3d',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/css-selector',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/dependency-injection' => array(
            'pretty_version' => 'v5.4.13',
            'version' => '5.4.13.0',
            'reference' => '24cf522668845391c0542bc1de496366072a6d0e',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/dependency-injection',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/deprecation-contracts' => array(
            'pretty_version' => 'v2.5.2',
            'version' => '2.5.2.0',
            'reference' => 'e8b495ea28c1d97b5e0c121748d6f9b53d075c66',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/deprecation-contracts',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/dom-crawler' => array(
            'pretty_version' => 'v4.4.45',
            'version' => '4.4.45.0',
            'reference' => '4b8daf6c56801e6d664224261cb100b73edc78a5',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/dom-crawler',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/event-dispatcher' => array(
            'pretty_version' => 'v5.4.9',
            'version' => '5.4.9.0',
            'reference' => '8e6ce1cc0279e3ff3c8ff0f43813bc88d21ca1bc',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/event-dispatcher',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/event-dispatcher-contracts' => array(
            'pretty_version' => 'v2.5.2',
            'version' => '2.5.2.0',
            'reference' => 'f98b54df6ad059855739db6fcbc2d36995283fe1',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/event-dispatcher-contracts',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/event-dispatcher-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '2.0',
            ),
        ),
        'symfony/filesystem' => array(
            'pretty_version' => 'v5.4.13',
            'version' => '5.4.13.0',
            'reference' => 'ac09569844a9109a5966b9438fc29113ce77cf51',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/filesystem',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-ctype' => array(
            'pretty_version' => 'v1.26.0',
            'version' => '1.26.0.0',
            'reference' => '6fd1b9a79f6e3cf65f9e679b23af304cd9e010d4',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-ctype',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-intl-grapheme' => array(
            'pretty_version' => 'v1.26.0',
            'version' => '1.26.0.0',
            'reference' => '433d05519ce6990bf3530fba6957499d327395c2',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-intl-grapheme',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-intl-idn' => array(
            'pretty_version' => 'v1.26.0',
            'version' => '1.26.0.0',
            'reference' => '59a8d271f00dd0e4c2e518104cc7963f655a1aa8',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-intl-idn',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-intl-normalizer' => array(
            'pretty_version' => 'v1.26.0',
            'version' => '1.26.0.0',
            'reference' => '219aa369ceff116e673852dce47c3a41794c14bd',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-intl-normalizer',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-mbstring' => array(
            'pretty_version' => 'v1.26.0',
            'version' => '1.26.0.0',
            'reference' => '9344f9cb97f3b19424af1a21a3b0e75b0a7d8d7e',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-mbstring',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-php72' => array(
            'pretty_version' => 'v1.26.0',
            'version' => '1.26.0.0',
            'reference' => 'bf44a9fd41feaac72b074de600314a93e2ae78e2',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-php72',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-php73' => array(
            'pretty_version' => 'v1.26.0',
            'version' => '1.26.0.0',
            'reference' => 'e440d35fa0286f77fb45b79a03fedbeda9307e85',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-php73',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-php80' => array(
            'pretty_version' => 'v1.26.0',
            'version' => '1.26.0.0',
            'reference' => 'cfa0ae98841b9e461207c13ab093d76b0fa7bace',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-php80',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-php81' => array(
            'pretty_version' => 'v1.26.0',
            'version' => '1.26.0.0',
            'reference' => '13f6d1271c663dc5ae9fb843a8f16521db7687a1',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-php81',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/process' => array(
            'pretty_version' => 'v5.4.11',
            'version' => '5.4.11.0',
            'reference' => '6e75fe6874cbc7e4773d049616ab450eff537bf1',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/process',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/service-contracts' => array(
            'pretty_version' => 'v2.5.2',
            'version' => '2.5.2.0',
            'reference' => '4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/service-contracts',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/service-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.0|2.0',
            ),
        ),
        'symfony/string' => array(
            'pretty_version' => 'v5.4.15',
            'version' => '5.4.15.0',
            'reference' => '571334ce9f687e3e6af72db4d3b2a9431e4fd9ed',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/string',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/translation' => array(
            'pretty_version' => 'v5.4.14',
            'version' => '5.4.14.0',
            'reference' => 'f0ed07675863aa6e3939df8b1bc879450b585cab',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/translation',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/translation-contracts' => array(
            'pretty_version' => 'v2.5.2',
            'version' => '2.5.2.0',
            'reference' => '136b19dd05cdf0709db6537d058bcab6dd6e2dbe',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/translation-contracts',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/translation-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '2.3',
            ),
        ),
        'symfony/yaml' => array(
            'pretty_version' => 'v5.4.14',
            'version' => '5.4.14.0',
            'reference' => 'e83fe9a72011f07c662da46a05603d66deeeb487',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/yaml',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'theseer/tokenizer' => array(
            'pretty_version' => '1.2.1',
            'version' => '1.2.1.0',
            'reference' => '34a41e998c2183e22995f158c581e7b5e755ab9e',
            'type' => 'library',
            'install_path' => __DIR__ . '/../theseer/tokenizer',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
    ),
);