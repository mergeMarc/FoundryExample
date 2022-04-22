<?php

namespace App\Factory;

use App\Entity\IcEngine;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<IcEngine>
 *
 * @method static IcEngine|Proxy createOne(array $attributes = [])
 * @method static IcEngine[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static IcEngine|Proxy find(object|array|mixed $criteria)
 * @method static IcEngine|Proxy findOrCreate(array $attributes)
 * @method static IcEngine|Proxy first(string $sortedField = 'id')
 * @method static IcEngine|Proxy last(string $sortedField = 'id')
 * @method static IcEngine|Proxy random(array $attributes = [])
 * @method static IcEngine|Proxy randomOrCreate(array $attributes = [])
 * @method static IcEngine[]|Proxy[] all()
 * @method static IcEngine[]|Proxy[] findBy(array $attributes)
 * @method static IcEngine[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static IcEngine[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method IcEngine|Proxy create(array|callable $attributes = [])
 */
final class IcEngineFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function getDefaults(): array
    {
        return [
            'age' => self::faker()->numberBetween(1, 30),
            'wellMaintained' => self::faker()->boolean(),
            'cylinders' => self::faker()->numberBetween(1, 12),
        ];
    }

    protected function initialize(): self
    {
        return $this
            //->withoutPersisting()
            ;
    }

    protected static function getClass(): string
    {
        return IcEngine::class;
    }
}
