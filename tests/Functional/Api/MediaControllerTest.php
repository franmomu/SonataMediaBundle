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

namespace Sonata\MediaBundle\Tests\Functional\Api;

use Sonata\MediaBundle\Tests\App\AppKernel;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class MediaControllerTest extends WebTestCase
{
//    public function testGetMedia(): void
//    {
//        $kernel = new AppKernel();
//        $client = new KernelBrowser($kernel);
//
//        $client->request('GET', '/api/media.json');
//
//        var_dump($client->getResponse());
//        $this->assertSame(200, $client->getResponse()->getStatusCode());
//    }
//
    public function testPutMedia(): void
    {
        $kernel = new AppKernel();
        $client = new KernelBrowser($kernel);

        $client->request('PUT', '/api/media/1.json');

        var_dump($client->getResponse());
        $this->assertSame(200, $client->getResponse()->getStatusCode());
    }
}
