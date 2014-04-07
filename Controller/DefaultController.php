<?php

namespace Newscoop\CartuBankPay\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/testnewscoop")
     */
    public function indexAction(Request $request)
    {
        return $this->render('NewscoopCartuBankPay:Default:index.html.smarty');
    }

    /**
     * @Route("/admin/cartu_bank_pay")
     * @Template()
     */
    public function adminAction(Request $request)
    {
    	return array();
    }
}
