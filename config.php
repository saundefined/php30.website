<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'PHP 30',
    'description' => 'PHP turns 30!',
    'getText' => function ($page) {
        return trim(
            strip_tags(
                preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $page->getContent()),
                '<code>'
            )
        );
    },
    'collections' => [
        'acronyms' => [],
        'stories' => [],
        'friends' => [
            'sort' => 'order',
        ],
    ],
];
