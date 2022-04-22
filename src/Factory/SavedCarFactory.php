<?php

namespace App\Factory;

use App\Entity\SavedCar;
use App\Repository\SavedCarRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<SavedCar>
 *
 * @method static SavedCar|Proxy createOne(array $attributes = [])
 * @method static SavedCar[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static SavedCar|Proxy find(object|array|mixed $criteria)
 * @method static SavedCar|Proxy findOrCreate(array $attributes)
 * @method static SavedCar|Proxy first(string $sortedField = 'id')
 * @method static SavedCar|Proxy last(string $sortedField = 'id')
 * @method static SavedCar|Proxy random(array $attributes = [])
 * @method static SavedCar|Proxy randomOrCreate(array $attributes = [])
 * @method static SavedCar[]|Proxy[] all()
 * @method static SavedCar[]|Proxy[] findBy(array $attributes)
 * @method static SavedCar[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static SavedCar[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static SavedCarRepository|RepositoryProxy repository()
 * @method SavedCar|Proxy create(array|callable $attributes = [])
 */
final class SavedCarFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function getDefaults(): array
    {
        return [
            'registeredCar' => RegisteredCarFactory::new()
        ];
    }

    protected function initialize(): self
    {
        return $this;
    }

    protected static function getClass(): string
    {
        return SavedCar::class;
    }
}
