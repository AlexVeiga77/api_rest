<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 100; $i++) {
            $movie = new Movie();
            $movie->setTitle("Title of movie" . $i);
            $movie->setDescription("Description of movie" . $i * 3.1416);
            $movie->setReleaseDate((new DateTime())->modify("- $i days"));
            $manager->persist($movie);
        }
        $manager->flush();
    }
}
