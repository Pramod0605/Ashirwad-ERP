<?php 
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthGuard implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $uri = service('uri');
        if (!session()->get('isLoggedIn') && $uri->getSegment(1) != 'api')
        {
            return redirect()->to('/login');
        }

        if (session()->get('isLoggedIn')) {
            $db = db_connect();
            $activeStatus = $db->query("SELECT * FROM staff WHERE id = '".session()->get('userid')."' ")->getRow();
            if ($activeStatus->is_active == 0) {
                session()->destroy();
                return redirect()->to('/login');
            }
            $cookie_name = "userid";
            $cookie_value = session()->get('userid');
            setcookie($cookie_name, $cookie_value, 0, '/');
            
        }

    }
    
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}