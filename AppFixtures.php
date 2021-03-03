<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Tweet;
use App\Entity\User;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // Usuarios
        $user1 = new User();
        $user1->setName("Bill Gates");
        $user1->setUserName("BillGates");

        $user2 = new User();
        $user2->setName("Sundar Pichai");
        $user2->setUserName("sundarpichai");

        $user3 = new User();
        $user3->setName("Linus Torvalds");
        $user3->setUserName("Linus__Torvalds");

        $user4 = new User();
        $user4->setName("Tim Cook");
        $user4->setUserName("tim_cook");

        $manager->persist($user1);
        $manager->persist($user2);
        $manager->persist($user3);
        $manager->persist($user4);

        $tweet = new Tweet();
        $tweet->setText("The future is bright for the world’s poorest farmers because of innovative companies like myAgroFarms");
        $tweet->setDate(new \DateTime("19-11-2018 09:08:03"));
        $tweet->setUser($user1);
        $tweet->addLike($user2);
        $tweet->addLike($user3);
        $tweet->addLike($user4);
        $manager->persist($tweet);


        $tweet = new Tweet();
        $tweet->setUser($user2);
        $tweet->addLike($user1);
        $tweet->addLike($user2);
        $tweet->setDate(new \DateTime("19-11-2018 07:51:32"));
        $tweet->setText("DeepMind will continue to lead the way in fundamental research applying AI to important science and medical research questions, in collaboration w/partners, to accelerate scientific progress for the benefit of everyone.");
        $manager->persist($tweet);


        $tweet = new Tweet();
        $tweet->setUser($user3);
        $tweet->addLike($user3);
        $tweet->setDate(new \DateTime("18-11-2018 19:28:12"));
        $tweet->setText("Linux Nears Total Domination of the Top500 Supercomputers.");
        $manager->persist($tweet);


        $tweet = new Tweet();
        $tweet->setUser($user4);
        $tweet->addLike($user1);
        $tweet->setDate(new \DateTime("18-11-2018 10:15:25"));
        $tweet->setText("C’est magnifique ! Apple Champs-Élysées is open for all to enjoy. Thank you to everyone who worked on the restoration of this historic building — it’s stunning. Venez le découvrir par vous-même !");
        $manager->persist($tweet);


        $tweet = new Tweet();
        $tweet->setUser($user1);
        $tweet->addLike($user3);
        $tweet->addLike($user4);
        $tweet->setDate(new \DateTime("17-11-2018 19:08:05"));
        $tweet->setText("Whenever I travel for the foundation, the farmers I meet talk about one thing that holds them back: they can’t save their money. @myAgroFarms is one of the companies working on creative solutions to this problem.");
        $manager->persist($tweet);

        $tweet = new Tweet();
        $tweet->setUser($user4);
        $tweet->setDate(new \DateTime("17-11-2018 11:15:35"));
        $tweet->setText("Proud of this team and the work they do to leave our world better than we found it. Congratulations and thank you!");
        $manager->persist($tweet);


        $tweet = new Tweet();
        $tweet->setUser($user2);
        $tweet->setDate(new \DateTime("15-11-2018 09:23:11"));
        $tweet->setText("We are mobilizing to support those impacted by the #CampFire, #HillFire and #WoolseyFire weeth SOS Alerts, and committing resources from @googleorg to aid those in need. Our thoughts are weeth all those displaced by these fires.");
        $manager->persist($tweet);


        $tweet = new Tweet();
        $tweet->setUser($user1);
        $tweet->addLike($user3);
        $tweet->setDate(new \DateTime("15-11-2018 08:12:36"));
        $tweet->setText("Farm yields in many parts of Africa are just a fifth of those in the United States. Innovations in agriculture will make it possible for poor farmers to increase their yields.");
        $manager->persist($tweet);


        $tweet = new Tweet();
        $tweet->setUser($user2);
        $tweet->addLike($user2);
        $tweet->setDate(new \DateTime("12-11-2018 12:11:32"));
        $tweet->setText("We’re announcing our AI for Social Good program, applying @GoogleAI expertise to projects w/ positive societal impact. We invite researchers & orgs to submit ideas for the #GoogleAI Impact Challenge: @googleorg will fund $25M in grants to chosen projects.");
        $manager->persist($tweet);

        $tweet = new Tweet();
        $tweet->setUser($user4);
        $tweet->setDate(new \DateTime("11-11-2018 11:15:25"));
        $tweet->setText("We have so much to learn from those who sacrifice for the common good. To the women and men of our military — both past and present, including my father— we are forever grateful for your service.");
        $manager->persist($tweet);


        $tweet = new Tweet();
        $tweet->setUser($user3);
        $tweet->setDate(new \DateTime("10-11-2018 10:31:12"));
        $tweet->setText("Linux Foundation Training Prepares the International Space Station for Linux Migration.");
        $manager->persist($tweet);

        $tweet = new Tweet();
        $tweet->setUser($user3);
        $tweet->setDate(new \DateTime("08-11-2018 01:15:25"));
        $tweet->setText("Free Intro to Linux Online Course Starts Today.");
        $manager->persist($tweet);

        $manager->flush();
    }
}
