<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Instaphp\Instaphp as Instaphp;
class DefaultController extends Controller
{
    /**
     * @Route("/home", name="homepage")
     */
    public function homeAction(Request $request)
    {
//        $query = "snoopdo";
//        $api = $this->get('instaphp');
//        $searchResults = $api->Tags->Search($query, array(10));
        //finding a user
        $query = "stephen_psaradellis";

        /**
         * @var InstaphpAdapter
         */
        $api = new Instaphp([
            'client_id' => 'ccc04520380b4d61b86e3778743448a6',
            'client_secret' => 'a99dd2d0543f4da58224fc84cebc1f3f',
            'redirect_uri' => 'http://www.greekrow.online',
            'scope' => 'comments+relationships'
        ]);

          $userId = $api->Users->FindId($query);
//        $media = $api->Users->Recent($userId);

        return $this->render('base.html.twig', [
                'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            ]);
    }


    /**
     *
     *
     */
    public function searchAction(Request $request)
    {

    }


}
