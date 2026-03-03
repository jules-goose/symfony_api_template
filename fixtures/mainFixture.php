<?php

declare(strict_types=1);

namespace Fixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MainFixtures extends Fixture
{
    public function __construct(
    ) {
    }

    public function load(ObjectManager $manager): void
    {
    }
}
