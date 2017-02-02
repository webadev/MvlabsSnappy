<?php

namespace MvlabsSnappy\Services;


use Knp\Snappy\Pdf;
use Zend\ServiceManager\Factory\FactoryInterface;


class MvlabsSnappyPdfServiceFactory implements FactoryInterface
{
   
	/**
	 * {@inheritDoc}
	 * @see \Zend\ServiceManager\Factory\FactoryInterface::__invoke()
	 */
	public function __invoke(\Interop\Container\ContainerInterface $container, $requestedName, array $options = null) {
		// TODO Auto-generated method stub
		$config  = $container->get('config');
		$service = new Pdf($config['mvlabs-snappy']['pdf']['binary'], $config['mvlabs-snappy']['pdf']['options']);
		
		return $service;
	}

    
}
