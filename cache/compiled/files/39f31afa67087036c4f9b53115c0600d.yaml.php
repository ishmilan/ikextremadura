<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/opt/lampp/htdocs/ikextremadura/user/plugins/minify-html/languages/en.yaml',
    'modified' => 1517582305,
    'data' => [
        'PLUGIN_MINIFYHTML' => [
            'LABEL' => 'Compression Mode',
            'HELP' => 'Choose a compression mode (default compress JS and CSS but doesn\'t do it aggressively to get the smallest size.Fastest only compresses HTML and ignores the rest. Smallest compress everything aggressively to get the smallest size.)',
            'OPTION' => [
                'DEFAULT' => 'default',
                'FASTEST' => 'fastest',
                'SMALLEST' => 'smallest'
            ]
        ]
    ]
];
