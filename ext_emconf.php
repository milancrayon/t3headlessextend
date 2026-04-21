<?php
$EM_CONF['t3headlessextend'] = [
    'title' => 'T3headless Extend',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-14.4.99',
            'container' => '^3.1.12'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            "Crayon\\T3headlessextend\\" => "Classes",
        ],
    ],
    'category' => 'templates',
    'uploadfolder' => 0,
    'createDirs' => '',
    'author' => 'Milan Pandya',
    'author_email' => 'info@t3headless.com',
    'author_company' => 'Crayonweb Studio Pvt. Ltd.',
    'state' => 'stable',
    'version' => '1.0.0',
    'clearcacheonload' => 1,
];
