<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/opt/lampp/htdocs/ikextremadura/user/plugins/autoseo/blueprints.yaml',
    'modified' => 1517174760,
    'data' => [
        'name' => 'Auto SEO',
        'version' => '1.3.5',
        'description' => 'Grav AutoSEO is a plugin for Grav with which you can fill automatically the description and keywords metadata of a page using its content. It also adds Facebook Open Graph metadata and Twitter Cards Meta Tags.',
        'icon' => 'magic',
        'author' => [
            'name' => 'Laurent ongaro',
            'email' => 'laurent@steamlead.com',
            'url' => 'http://www.steamlead.com'
        ],
        'homepage' => 'https://github.com/steamlead/grav-plugin-autoseo',
        'keywords' => 'plugin, seo, metadata extraction, auto fill',
        'bugs' => 'https://github.com/steamlead/grav-plugin-autoseo/issues',
        'docs' => 'https://github.com/steamlead/grav-plugin-autoseo/blob/master/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'admin',
                'version' => '>=1.5.0'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'global' => [
                    'type' => 'section',
                    'title' => 'PLUGINS.AUTO_SEO.GLOBAL_CONFIG',
                    'underline' => 1,
                    'fields' => [
                        'enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.AUTO_SEO.PLUGIN_STATUS',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'metadata' => [
                    'type' => 'section',
                    'title' => 'PLUGINS.AUTO_SEO.DEFAULT_CONFIG',
                    'underline' => 1,
                    'fields' => [
                        'description.enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.AUTO_SEO.DESCRIPTION.ENABLED_LABEL',
                            'help' => 'PLUGINS.AUTO_SEO.DESCRIPTION.ENABLED_HELP',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'description.length' => [
                            'type' => 'text',
                            'size' => 'x-small',
                            'label' => 'PLUGINS.AUTO_SEO.DESCRIPTION.LENGTH_LABEL',
                            'help' => 'PLUGINS.AUTO_SEO.DESCRIPTION.LENGTH_HELP',
                            'default' => 30,
                            'validate' => [
                                'type' => 'number',
                                'min' => 2,
                                'max' => 50
                            ]
                        ],
                        'keywords.enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.AUTO_SEO.KEYWORDS.ENABLED_LABEL',
                            'help' => 'PLUGINS.AUTO_SEO.KEYWORDS.ENABLED_HELP',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'keywords.length' => [
                            'type' => 'text',
                            'size' => 'x-small',
                            'label' => 'PLUGINS.AUTO_SEO.KEYWORDS.LENGTH_LABEL',
                            'help' => 'PLUGINS.AUTO_SEO.KEYWORDS.LENGTH_HELP',
                            'default' => 20,
                            'validate' => [
                                'type' => 'number',
                                'min' => 2,
                                'max' => 30
                            ]
                        ],
                        'facebook.enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.AUTO_SEO.FACEBOOK.ENABLED_LABEL',
                            'help' => 'PLUGINS.AUTO_SEO.FACEBOOK.ENABLED_HELP',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'twitter.enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.AUTO_SEO.TWITTER.ENABLED_LABEL',
                            'help' => 'PLUGINS.AUTO_SEO.TWITTER.ENABLED_HELP',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
