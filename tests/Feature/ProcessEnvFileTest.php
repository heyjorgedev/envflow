<?php

use App\Actions\ProcessEnvFile;

test('removes comments from envfile', function () {
    $envFile = <<<'ENV'
        DATABASE=database
        #USER=user
    ENV;

    $result = (new ProcessEnvFile)->sanitize($envFile, includeComments: false);

    expect($result)->not->toContain('#USER=user');
});

test('keeps comments from envfile', function () {
    $envFile = <<<'ENV'
        DATABASE=database
        #USER=user
    ENV;

    $result = (new ProcessEnvFile)->sanitize($envFile, includeComments: true);

    expect($result)->toContain('#USER=user');
});
