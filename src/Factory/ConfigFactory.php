<?php

namespace App\Factory;

use App\Entity\Config;
use App\Repository\ConfigRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Config>
 *
 * @method        Config|Proxy                     create(array|callable $attributes = [])
 * @method static Config|Proxy                     createOne(array $attributes = [])
 * @method static Config|Proxy                     find(object|array|mixed $criteria)
 * @method static Config|Proxy                     findOrCreate(array $attributes)
 * @method static Config|Proxy                     first(string $sortedField = 'id')
 * @method static Config|Proxy                     last(string $sortedField = 'id')
 * @method static Config|Proxy                     random(array $attributes = [])
 * @method static Config|Proxy                     randomOrCreate(array $attributes = [])
 * @method static ConfigRepository|RepositoryProxy repository()
 * @method static Config[]|Proxy[]                 all()
 * @method static Config[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static Config[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static Config[]|Proxy[]                 findBy(array $attributes)
 * @method static Config[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static Config[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 */
final class ConfigFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Config $config): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Config::class;
    }
}
