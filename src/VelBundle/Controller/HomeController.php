<?php

namespace VelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class HomeController
 * @package VelBundle\Controller
 */
class HomeController extends BaseController
{
    /**
     * @param Request $request
     * @Template
     * @return array
     */
    public function indexAction(Request $request)
    {
        return [];
    }
}
