<?php

namespace App\Factory;

use App\Entity\RegisteredCar;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<RegisteredCar>
 *
 * @method static RegisteredCar|Proxy createOne(array $attributes = [])
 * @method static RegisteredCar[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static RegisteredCar|Proxy find(object|array|mixed $criteria)
 * @method static RegisteredCar|Proxy findOrCreate(array $attributes)
 * @method static RegisteredCar|Proxy first(string $sortedField = 'id')
 * @method static RegisteredCar|Proxy last(string $sortedField = 'id')
 * @method static RegisteredCar|Proxy random(array $attributes = [])
 * @method static RegisteredCar|Proxy randomOrCreate(array $attributes = [])
 * @method static RegisteredCar[]|Proxy[] all()
 * @method static RegisteredCar[]|Proxy[] findBy(array $attributes)
 * @method static RegisteredCar[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static RegisteredCar[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method RegisteredCar|Proxy create(array|callable $attributes = [])
 */
final class RegisteredCarFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function getDefaults(): array
    {
        return [
            'vin' => self::faker()->uuid(),
            'car' => CarFactory::new()
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
        return RegisteredCar::class;
    }
}
