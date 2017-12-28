<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace PaymentTest\Controller;

use Payment\Controller\PaymentController;
use Zend\Stdlib\ArrayUtils;
use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class PaymentControllerTest extends AbstractHttpControllerTestCase
{
    public function setUp()
    {
        // The module configuration should still be applicable for tests.
        // You can override configuration here with test case specific values,
        // such as sample view templates, path stacks, module_listener_options,
        // etc.
        $configOverrides = [];

        $this->setApplicationConfig(ArrayUtils::merge(
            include __DIR__ . '/../../../../config/application.config.php',
            $configOverrides
        ));

        parent::setUp();
    }

    // public function testIndexActionCanBeAccessed()
    // {
    //     $this->dispatch('/', 'GET');
    //     $this->assertResponseStatusCode(200);
    //     $this->assertModuleName('application');
    //     $this->assertControllerName(IndexController::class); // as specified in router's controller name alias
    //     $this->assertControllerClass('IndexController');
    //     $this->assertMatchedRouteName('home');
    // }

    // public function testIndexActionForUnAuthorisedUsers()
    // {
    //     $this->dispatch('/payment', 'GET');
    //     $this->assertModuleName('payment');
    //     $this->assertControllerClass('PaymentController');
    //     $this->assertMatchedRouteName('login');
    // }

    // public function testInvalidRouteDoesNotCrash()
    // {
    //     $this->dispatch('/invalid/route', 'GET');
    //     $this->assertResponseStatusCode(404);
    // }
}
