<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User1;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 20; $i++) {
            $user = new User1();
            $user->setNom($faker->name());
            $user->setPrenom($faker->firstName());
            $user->setTel($faker->numberBetween(10000000,99999999));
            $user->setAdress($faker->address());
            $manager->persist($user);
        }

        $manager->flush();
    }
}
