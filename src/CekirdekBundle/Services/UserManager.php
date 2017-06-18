<?php
namespace CoreBundle\Services;
use ModelBundle\Entity\User;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
/**
 * Class UserManager
 */
class UserManager
{
    private $em;
    /**
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    /**
     * Find User by slug
     *
     * @param string $slug
     *
     * @throws NotFoundHttpException
     * @return User
     */
    public function findBySlug($slug)
    {
        $user = $this->em->getRepository('ModelBundle:User')->findOneBy(
            array(
                'slug' => $slug,
            )
        );
        if (null === $user) {
            throw new NotFoundHttpException('User was not found');
        }
        return $user;
    }
    /**
     * Find all posts for a given user
     *
     * @param User $user
     *
     * @return array
     */
    public function findPosts(User $user)
    {
        $posts = $this->em->getRepository('ModelBundle:Post')->findBy(
            array(
                'user' => $user,
            )
        );
        return $posts;
    }
}