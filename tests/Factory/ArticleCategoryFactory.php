<?php

namespace App\Tests\Factory;

use App\Entity\ArticleCategory;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;

/**
 * @extends PersistentProxyObjectFactory<ArticleCategory>
 */
final class ArticleCategoryFactory extends PersistentProxyObjectFactory
{
    public static function class(): string
    {
        return ArticleCategory::class;
    }

    protected function defaults(): array|callable
    {
        return [
            'createdBy' => UserFactory::new(),
            'description' => self::faker()->text(),
            'name' => self::faker()->text(255),
        ];
    }
}
