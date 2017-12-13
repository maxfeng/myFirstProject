<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Utils\YStoreApi;

class OrderController extends Controller
{
    /**
     * @Route("/test")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
	
    /**
     * @Route("/stauth/v1/Order/Query")
     */
    public function queryAction(Request $request)
    {
        $data = print_r($request);
        
        //取得相關傳入資訊
        $api_parameter = $request->request->all();
        
        $secret = 'NmI0MTgxYzJmNDU1OTRjYzM3MzQwZmIzNWU4NTFiNTc-';
        
        $YStoreApi = new YStoreApi($api_parameter['ApiKey'], $secret);
        
        $signature = $YStoreApi->GetSignature($api_parameter);

        return new Response(
            $signature.''.$data.''
        );

    }
}
