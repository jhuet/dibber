<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Dibber\Controller;

use Zend\View\Model\ViewModel;

class UserController extends \ZfcUser\Controller\UserController
{
    /**
     * Public user page
     */
    public function indexAction()
    {
        return new ViewModel( [
            'user' => $this->params('user')
        ] );
    }

    /**
     * Profile page
     */
    public function profileAction()
    {
        if (!$this->zfcUserAuthentication()->hasIdentity()) {
            return $this->redirect()->toRoute('zfcuser/login');
        }
        return new ViewModel();
    }
}
