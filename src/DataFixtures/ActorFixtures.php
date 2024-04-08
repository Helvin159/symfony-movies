<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $actor = new Actor();
        $actor->setName('Christian Bale');
        $manager->persist($actor);

        $actorTwo = new Actor();
        $actorTwo->setName('Heath Ledger');
        $manager->persist($actorTwo);
        
        $actorThree = new Actor();
        $actorThree->setName('Robert Downey Jr');
        $manager->persist($actorThree);
        
        $actorFour = new Actor();
        $actorFour->setName('Chris Evans');
        $manager->persist($actorFour);

        $manager->flush();

        $this->addReference('actor_1',$actor);
        $this->addReference('actor_2',$actorTwo);
        $this->addReference('actor_3',$actorThree);
        $this->addReference('actor_4',$actorFour);
    }
}
