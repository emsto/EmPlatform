<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

/**
 * ApiController
 *
 * @author
 *
 *
 *
 *
 *
 * @version
 *
 *
 *
 *
 *
 */
class ApiController extends AbstractRestfulController
{
    /*
     * (non-PHPdoc) @see \Zend\Mvc\Controller\AbstractRestfulController::create()
     */
    public function create($data)
    {
        // TODO Auto-generated method stub
    }
    
    /*
     * (non-PHPdoc) @see \Zend\Mvc\Controller\AbstractRestfulController::delete()
     */
    public function delete($id)
    {
        // TODO Auto-generated method stub
    }
    
    /*
     * (non-PHPdoc) @see \Zend\Mvc\Controller\AbstractRestfulController::get()
     */
    public function get($id)
    {
        // TODO Auto-generated method stub
    }
    
    /*
     * (non-PHPdoc) @see \Zend\Mvc\Controller\AbstractRestfulController::getList()
     */
    public function getList()
    {
        // TODO Auto-generated method stub
        $viewModel = new JsonModel();
        
        return $viewModel;
    }
    
    /*
     * (non-PHPdoc) @see \Zend\Mvc\Controller\AbstractRestfulController::update()
     */
    public function update($id, $data)
    {
        // TODO Auto-generated method stub
    }
    /*
     * (non-PHPdoc) @see \Zend\Mvc\Controller\AbstractRestfulController::options()
     */
    public function options()
    {
        $response = $this->getResponse();
        $headers = $response->getHeaders();
        
        // If you want to vary based on whether this is a collection or an
        // individual item in that collection, check if an identifier from
        // the route is present
        if ($this->params()->fromRoute('id', false)) {
            // Allow viewing, partial updating, replacement, and deletion
            // on individual items
            $headers->addHeaderLine('Allow', implode(',', array(
                'GET',
                'PATCH',
                'PUT',
                'DELETE'
            )));
            return $response;
        }
        
        // Allow only retrieval and creation on collections
        $headers->addHeaderLine('Allow', implode(',', array(
            'GET',
            'POST'
        )));
        
        return $response;
    }
}