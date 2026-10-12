<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Services;
use Psr\Log\LoggerInterface;


abstract class AdminController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend AdminController.
     *
     * @var array
     */
    protected $helpers = ['Common_helper', 'admin', 'form', 'url'];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    protected $session;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        $this->request          = \Config\Services::request();
        $this->db               = \Config\Database::connect(); 
        $this->session          = \Config\Services::session();
        $this->uri              = service('uri');

        if (session_status() == PHP_SESSION_NONE)
        {
            $this->session = \Config\Services::session();
        }
        
    }
}
