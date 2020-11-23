<?php

namespace Eshop\ShopBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Eshop\UserBundle\Entity\User;

/**
 * FavouritesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FavouritesRepository extends EntityRepository
{
    /**
     * @param User $user
     * @param integer $productId
     * @return bool
     */
    public function checkIsLiked($user, $productId)
    {
        $qb = $this->getEntityManager()
            ->createQueryBuilder()
            ->select('count(f.id)')
            ->from('ShopBundle:Favourites', 'f')
            ->innerJoin('f.user', 'u')
            ->innerJoin('f.product', 'p')
            ->where('u = :user')
            ->andWhere('p.id = :product_id')
            ->setParameters([
                'product_id' => $productId,
                'user' => $user
            ]);

        if ($qb->getQuery()->getSingleScalarResult()) {
            return true;
        } else {
            return false;
        }
    }
}
