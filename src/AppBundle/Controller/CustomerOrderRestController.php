<?php


namespace AppBundle\Controller;


use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

/**
 * Class CustomerOrderRestController
 * @package AppBundle\Controller
 * @author Tiko Banyini
 */
class CustomerOrderRestController extends FOSRestController
{

    /**
     * Create Customer Order
     * @Rest\Post("/create", name="create_customer_order_rest")
     *  @ApiDoc(
     *  resource=true,
     *  description="Create customer order.",
     * )
     *
     * @param Request $request
     * @return Response
     */
    public function createAction(Request $request){

    }
}