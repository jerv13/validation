<?php

namespace Jerv\Validation\Processor;

use Jerv\Validation\ServiceLocator;
use Psr\Container\ContainerInterface;

/**
 * Class DataSetProcessorFactory
 */
class DataSetProcessorFactory
{
    /**
     * createService
     *
     * @param ContainerInterface $container
     *
     * @return DataSetProcessor
     */
    public function __invoke($container)
    {
        /** @var ServiceLocator $serviceLocator */
        $serviceLocator = $container->get(ServiceLocator::class);

        return new DataSetProcessor($serviceLocator);
    }
}