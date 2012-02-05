<?php

namespace Ali\DatatableBundle\Tests;

use Symfony\Component\HttpKernel\Kernel,
    Symfony\Component\Config\Loader\LoaderInterface,
    Symfony\Bundle\FrameworkBundle\FrameworkBundle,
    Symfony\Bundle\TwigBundle\TwigBundle,
    Symfony\Bundle\DoctrineBundle\DoctrineBundle,
    Symfony\Bundle\AsseticBundle\AsseticBundle,
//    Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle,
    Ali\DatatableBundle\AliDatatableBundle;

class AppKernel extends Kernel
{

    public function registerBundles()
    {
        $bundles = array(
            new FrameworkBundle(),
            new TwigBundle(),
            new DoctrineBundle(),
//            new AsseticBundle(),
//            new SensioFrameworkExtraBundle(),
            new AliDatatableBundle(),
        );

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__ . '/config/config.yml');
    }

    public function getRootDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        return sys_get_temp_dir() . '/' . Kernel::VERSION . '/cache/' . $this->environment;
    }

    public function getLogDir()
    {
        return sys_get_temp_dir() . '/' . Kernel::VERSION . '/logs';
    }

    protected function getKernelParameters()
    {
        $parameters = parent::getKernelParameters();

        return $parameters;
    }

}
