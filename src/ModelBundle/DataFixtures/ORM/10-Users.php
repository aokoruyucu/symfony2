<?php
namespace Blog\ModelBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ModelBundle\Entity\User;

/**
 * Fixtures for the Author Entity
 */
class Users extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 10;
    }
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $a1 = new User();
        $a1->setName('David');
        $a1->setSurname('Beckham');
        $a1->setPassword('1234');//for now
        $a1->setType('user');
        $a1->setEmail('david@test.com');
        $a2 = new User();
        $a2->setName('Alex');
        $a2->setSurname('De Souza');
        $a2->setPassword('1234');//for now
        $a2->setType('user');
        $a2->setEmail('alex@test.com');
        $a3 = new User();
        $a3->setName('Cristiano');
        $a3->setSurname('Ronaldo');
        $a3->setPassword('1234');//for now
        $a3->setType('user');
        $a3->setEmail('ronaldo@test.com');
        $manager->persist($a1);
        $manager->persist($a2);
        $manager->persist($a3);
        $manager->flush();
    }
}