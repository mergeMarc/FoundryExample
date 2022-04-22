<?php

namespace App\DataFixtures;

use App\Factory\SavedCarFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        SavedCarFactory::createMany(50);

        $manager->flush();
    }
}
