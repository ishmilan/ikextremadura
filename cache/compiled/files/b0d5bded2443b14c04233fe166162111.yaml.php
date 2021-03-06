<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/opt/lampp/htdocs/ikextremadura/user/plugins/minify-html/blueprints.yaml',
    'modified' => 1517582305,
    'data' => [
        'name' => 'Minify Html',
        'version' => '0.0.8',
        'description' => 'Plugin to minify HTML output',
        'icon' => 'compress',
        'keywords' => 'grav-cms, grav-plugin, minify-html',
        'license' => 'MIT',
        'author' => [
            'name' => 'jimblue'
        ],
        'homepage' => 'https://github.com/jimblue/grav-plugin-minify-html',
        'bugs' => 'https://github.com/jimblue/grav-plugin-minify-html/issues',
        'docs' => 'https://github.com/jimblue/grav-plugin-minify-html/blob/master/README.md',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'mode' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'label' => 'PLUGIN_MINIFYHTML.LABEL',
                    'help' => 'PLUGIN_MINIFYHTML.HELP',
                    'default' => 'default',
                    'options' => [
                        'default' => 'PLUGIN_MINIFYHTML.OPTION.DEFAULT',
                        'fastest' => 'PLUGIN_MINIFYHTML.OPTION.FASTEST',
                        'smallest' => 'PLUGIN_MINIFYHTML.OPTION.SMALLEST'
                    ]
                ]
            ]
        ]
    ]
];
