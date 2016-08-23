<?php
/**
 *
 */
namespace AppBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Extension\Extension;

/**
 * Class RemokerBundle\DependencyInjection\AppExtension
 *
 * @author   Samuel Heinzmann <samuel.heinzmann@bluewin.ch>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     https://github.com/PanteraLX/gleiser
 */
class AppExtension extends Extension
{
    /**
     * All services and parameters (e.g. routing) related to this extension will be loaded
     *
     * @param array            $configs   Configurations
     * @param ContainerBuilder $container Container Builder
     *
     * @return void
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . "/../Resources/config"));
        $loader->load("services.yml");
    }
}