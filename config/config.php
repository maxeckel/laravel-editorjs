<?php

return [
    'default_type' => 'view',

    'blocks' => [
        'code' => \Maxeckel\LaravelEditorjs\Blocks\Code::class,
        'delimiter' => \Maxeckel\LaravelEditorjs\Blocks\Delimiter::class,
        'header' => \Maxeckel\LaravelEditorjs\Blocks\Header::class,
        'image' => \Maxeckel\LaravelEditorjs\Blocks\Image::class,
        'list' => \Maxeckel\LaravelEditorjs\Blocks\ListBlock::class,
        'paragraph' => \Maxeckel\LaravelEditorjs\Blocks\Paragraph::class,
        'quote' => \Maxeckel\LaravelEditorjs\Blocks\Quote::class,
    ],

    'types' => [
        // 'view' => [
        //     'paragraph' => 'view.paragraph',
        //     'header' => [
        //         '1' => 'view.header.h1',
        //         '2' => 'view.header.h2',
        //         '3' => 'view.header.h3',
        //         '4' => 'view.header.h4',
        //         '5' => 'view.header.h5',
        //         '6' => 'view.header.h6',
        //     ]
        // ],
    ]
];
