<?php

namespace Blog\Factory;

/**
 * Description of PostServiceFactory
 *
 * @author Jakob
 */

use Blog\Service\PostService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class PostServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new PostService(
                $serviceLocator->get('Blog\Mapper\PostMapperInterface')
        );
    }
}
