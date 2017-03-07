<?php


namespace AppBundle\Controller;


use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;

/**
 * Class CurrencyInventoryRestController
 *
 * @package AppBundle\Controller
 * @author Tiko Banyini
 */
class CurrencyInventoryRestController extends FOSRestController
{


    /**
     * Get list of currency inventory.
     *@Rest\Get("/list", name="get_currency_inventory_list_rest")
     *  @ApiDoc(
     *  resource=true,
     *  description="Get list of currencies to be purchased.",
     * )
     *
     * @param Request $request
     * @return Response
     */
    public function listAction(Request $request){

        $inventoryListHandler = $this->get('currency_inventory.list_handler');
        $currencyInventories = $inventoryListHandler->handle($request);

        $view = $this->view($currencyInventories);
        return $this->handleView($view);


    }

}