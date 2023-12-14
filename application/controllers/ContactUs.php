<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContactUs extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('contactUs');
    }
    function submit()
    {
        //get the form data
        $name = $this->input->post('name');
        $from_email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $link = $this->input->post('link');
        $message = $this->input->post('message');

        // Load PHPMailer library
        $this->load->library('phpmailer_lib');
        // PHPMailer object
        $mail = $this->phpmailer_lib->load();
        $mail->IsSMTP(); // Set mailer to use SMTP
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;
        $mail->CharSet = "big5";
        //$mail->SMTPDebug = 3; //close when success (for checking purpose)

        $mail->Username = "xueqianniubi@gmail.com";
        $mail->Password = "knzk dzxu twmp jjjr";
        $mail->SetFrom('xueqianniubi@gmail.com', 'Contact Admin'); //sender email


        $mail->Sender = 'account_bounces-user=xueqianniubi@gmail.com';
        $mail->Subject = "Client Enquiry";
        $mail->Body = "<html><body><font style='font-size:20px'>This is a new message from potential client <b>" . $name . "！</b></font><br/> <br/>Email: " . $from_email . "<br/>Phone Number: " . $phone . "<br/>Source Link: " . $link . "<br/>Message: " . $message . "</body></html>";
        $mail->IsHTML(true);

        $mail->AddAddress("xueqianniubi@gmail.com");


        // ...

        // Attach file if provided
        if (!empty($_FILES['attachment']['name'])) {
            $attachment_name = $_FILES['attachment']['name'];
            $attachment_path = FCPATH . 'uploads/' . $attachment_name;

            // Move the uploaded file to the "uploads" folder
            move_uploaded_file($_FILES['attachment']['tmp_name'], $attachment_path);

            $mail->AddAttachment($attachment_path, $attachment_name);
        }

        // ...


        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        if ($mail->Send()) {
            $this->session->set_flashdata('sendEmail-success', 'Sent Successfully ');
            redirect(base_url('ContactUs'));
        } else {
            $this->session->set_flashdata('sendEmail-fail', 'Sent Failed');
            redirect(base_url('ContactUs'));
        }
    }
}
