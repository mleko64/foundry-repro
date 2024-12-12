<?php

namespace App\Tests\Factory;

use App\Entity\Article;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;

/**
 * @extends PersistentProxyObjectFactory<Article>
 */
final class ArticleFactory extends PersistentProxyObjectFactory
{
    public static function class(): string
    {
        return Article::class;
    }

    protected function defaults(): array|callable
    {
        return [
            'category' => ArticleCategoryFactory::new(),
            'content' => self::faker()->text(),
            'createdBy' => UserFactory::new(),
            'title' => self::faker()->text(255),
        ];
    }
}
