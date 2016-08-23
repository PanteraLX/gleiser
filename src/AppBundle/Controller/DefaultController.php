<?php
/**
 *
 */
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpFoundation\Response;

/**
 * Class AppBundle\Controller\DefaultController
 *
 * @author   Samuel Heinzmann <samuel.heinzmann@bluewin.ch>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     https://github.com/PanteraLX/gleiser
 */
class DefaultController extends Controller
{
    /**
     * @param Request $request Http request
     * @return Response
     *
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(
            'default/index.html.twig',
            ['base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),]
        );
    }
}
