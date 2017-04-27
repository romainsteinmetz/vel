<?php
/**
 * Created by PhpStorm.
 * User: romainsteinmetz
 * Date: 13/04/2017
 * Time: 22:17
 */

namespace VelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class BaseController
 * @package VelBundle\Controller
 */
class BaseController extends Controller
{
    /**
     * @param $persistentObjectName
     * @return \Doctrine\Common\Persistence\ObjectRepository
     */
    public function getRepository($persistentObjectName)
    {
        return $this->getDoctrine()->getRepository($persistentObjectName);
    }
}