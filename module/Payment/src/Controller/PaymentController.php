<?php
namespace Payment\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * This controller is responsible for role management (adding, editing, 
 * viewing, deleting).
 */
class PaymentController extends AbstractActionController 
{
    
    /**
     * This is the default "index" action of the controller. It displays the 
     * list of roles.
     */
    public function indexAction() 
    {
        return new ViewModel([]);
    } 

    public function rollADiceAjaxAction()
    {
        $diceResult = $this->rollADiceService->getDiceResult();
        $result = new JsonModel(array(
            'result' => $diceResult
        ));

        return $result;
    }

}




