<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/opt/lampp/htdocs/ikextremadura/user/config/site.yaml',
    'modified' => 1517670180,
    'data' => [
        'title' => 'IKExtremadura',
        'default_lang' => 'es',
        'author' => [
            'name' => 'Ish Milan',
            'email' => 'info@ikextremadura.es'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Esta es la página Web personal de IKExtremadura Cáceres-Badajoz de Cáceres, M.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
