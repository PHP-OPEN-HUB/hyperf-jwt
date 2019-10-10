<?php

declare(strict_types=1);

namespace Hyperf\JwtAuth;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [

            ],
            'commands' => [
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'publish' => [
                [
                    'id' => 'jwt',
                    'description' => 'jwt-auth',
                    'source' => __DIR__.'/../publish/jwt.php',
                    'destination' => BASE_PATH.'/config/autoload/jwt.php',
                ],
            ],
        ];
    }
}
