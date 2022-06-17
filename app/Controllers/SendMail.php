<?php 
namespace App\Controllers;
use App\Models\FormModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\IncomingRequest;
class SendMail extends Controller
{       
    public function index() 
	{
        return view('contact');
    }
    function sendMail() { 
        $name = $this->request->getVar('name');
        $to = $this->request->getVar('mailTo');
        $subject = $this->request->getVar('subject');
        $message = $this->request->getVar('message');
        
        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom('admin@gautamnet.tk', $name);
        
        $email->setSubject($subject);
        $email->setMessage($message);
        if ($email->send()) 
		{
            echo '<script language="javascript">';
            echo 'alert("Email sent successfully")';
            echo '</script>';
            echo "<script type='text/javascript'>window.top.location='/';</script>"; exit; 
        } 
		else 
		{
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }

        
    }   
}