<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use App\Entity\Greeting;

class GreetingFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $greeting = new Greeting();
        $greeting->setName('Hello');
        $manager->persist($greeting);

        $greeting = new Greeting();
        $greeting->setName('Howdy');
        $manager->persist($greeting);

        $greeting = new Greeting();
        $greeting->setName('Eyup');
        $manager->persist($greeting);

        $manager->flush();
    }
}
