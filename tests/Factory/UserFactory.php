<?php

namespace App\Tests\Factory;

use App\Entity\User;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;

/**
 * @extends PersistentProxyObjectFactory<User>
 */
final class UserFactory extends PersistentProxyObjectFactory
{
    public static function class(): string
    {
        return User::class;
    }

    protected function defaults(): array|callable
    {
        return [
            'age' => self::faker()->numberBetween(0,120),
            'firstName' => self::faker()->firstName(self::faker()->boolean()),
            'lastName' => self::faker()->lastName(self::faker()->boolean()),
        ];
    }
}
