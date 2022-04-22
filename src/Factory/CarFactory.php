<?php

namespace App\Factory;

use App\Entity\Car;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Car>
 *
 * @method static Car|Proxy createOne(array $attributes = [])
 * @method static Car[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Car|Proxy find(object|array|mixed $criteria)
 * @method static Car|Proxy findOrCreate(array $attributes)
 * @method static Car|Proxy first(string $sortedField = 'id')
 * @method static Car|Proxy last(string $sortedField = 'id')
 * @method static Car|Proxy random(array $attributes = [])
 * @method static Car|Proxy randomOrCreate(array $attributes = [])
 * @method static Car[]|Proxy[] all()
 * @method static Car[]|Proxy[] findBy(array $attributes)
 * @method static Car[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Car[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method Car|Proxy create(array|callable $attributes = [])
 */
final class CarFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function getDefaults(): array
    {
        return [
            'name' => self::faker()->word(),
            'seats' => self::faker()->numberBetween(1, 10),
            'icEngine' => IcEngineFactory::new()
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
        return Car::class;
    }
}
