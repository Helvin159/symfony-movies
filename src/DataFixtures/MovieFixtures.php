<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();

        $movie->setTitle('Dark Knight');
        $movie->setRealeaseYear(2008);
        $movie->setDescription('Description of Dark Knight');
        $movie->setImagePath('https://cdn.pixabay.com/photo/2021/06/18/11/22/batman-6345897_960_720.jpg');

        // Add data to pivot table
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));
        $manager->persist($movie);

        $movieTwo = new Movie;
        $movieTwo->setTitle('Avengers: End Game');
        $movieTwo->setRealeaseYear(2019);
        $movieTwo->setDescription('Description of Avengers: End Game');
        $movieTwo->setImagePath('https://cdn.pixabay.com/photo/2020/10/28/10/02/captain-america-5692937_1280.jpg');

        // Add data to pivot table
        $movieTwo->addActor($this->getReference('actor_3'));
        $movieTwo->addActor($this->getReference('actor_4'));
        $manager->persist($movieTwo);

        $manager->flush();
    }
}
