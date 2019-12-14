<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\MediaBundle\Tests\App\Manager;

use Doctrine\ORM\Mapping as ORM;
use Sonata\MediaBundle\Model\MediaManagerInterface;
use Sonata\MediaBundle\Tests\App\Entity\Media;

/**
 * @ORM\Entity()
 */
class MediaManager implements MediaManagerInterface
{
    public function getClass()
    {
    }

    public function findAll()
    {
    }

    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
    {
    }

    public function findOneBy(array $criteria, array $orderBy = null)
    {
        $media = new Media();
        $media->setProviderName('sonata.media.provider.image');

        return $media;
    }

    public function find($id)
    {
    }

    public function create()
    {
    }

    public function save($entity, $andFlush = true)
    {
    }

    public function delete($entity, $andFlush = true)
    {
    }

    public function getTableName()
    {
    }

    public function getConnection()
    {
    }

    public function getPager(array $criteria, $page, $limit = 10, array $sort = [])
    {
        return [
            new Media(),
            new Media(),
        ];
    }
}
