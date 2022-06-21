<?php

namespace App\DataFixtures;

use App\Entity\Post;
use App\Factory\PostFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        PostFactory::new()->createMany(20);
    }
}
