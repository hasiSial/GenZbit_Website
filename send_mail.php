<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $vacancy = $_POST['vacancy'] ?? '';
    $service = $_POST['service'] ?? '';
    $message = $_POST['message'] ?? '';
    $website = $_POST['website_url'] ?? '';
    $url = $_POST['url'] ?? 'vacancy.php'; 

    $status = 'failed';
    $status_message = '';

    try {
        $cv = $_FILES['cv'] ?? null;
        $cv_path = '';

         if ($cv && $cv['error'] === UPLOAD_ERR_OK) {
            $upload_dir = 'uploads/';
            if (!is_dir($upload_dir) && !mkdir($upload_dir, 0777, true)) {
                throw new Exception('Failed to create upload directory.');
            }
            $cv_path = $upload_dir . basename($cv['name']);
            if (!move_uploaded_file($cv['tmp_name'], $cv_path)) {
                throw new Exception('Failed to move uploaded file.');
            }
        }

        if ($form_type === 'vacancy' && (empty($name) || empty($email) || empty($vacancy) || empty($message) )) {
            throw new Exception('All fields are required for vacancy application!');
        }

        if($form_type === 'vacancy' && !$cv_path){
            throw new Exception('Cv is required for vacancy application!');
        }

        if ($form_type === 'service' && (empty($name) || empty($email) || empty($service) || empty($message))) {
            throw new Exception('All fields are required for service request!');
        }

        if ($form_type === 'contact' && (empty($name) || empty($email) || empty($website) || empty($message))) {
            throw new Exception('All fields are required for contact form!');
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Invalid email address!');
        }

        $mail = new PHPMailer(true);
        
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
            $mail->isSMTP();                                            
            $mail->Host       = 'sandbox.smtp.mailtrap.io'; 
            $mail->SMTPAuth   = true;                               
            $mail->Username   = '8dc52ed3697acb'; 
            $mail->Password   = 'd63196fb34f8c6'; 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;      
            $mail->Port       = 465;     
            
            
            $mail->setFrom($email, $name);
            $mail->addAddress('suport@genzbit.com');   
            
            if (!empty($cv_path)) {
                $mail->addAttachment($cv_path);
            }
            

            $mail->isHTML(false);                                  
            if (!empty($service)) {
                $mail->Subject = 'New Service from ' . $name;
                $mail->Body = "Name: $name\nEmail: $email\nService: $service\nMessage:\n$message";
            } elseif (!empty($vacancy)) {
                $mail->Subject = 'New Application from ' . $name;
                $mail->Body = "Name: $name\nEmail: $email\nVacancy: $vacancy\nMessage:\n$message";
            } else {
                $mail->Subject = 'New Contact from ' . $name;
                $mail->Body = "Name: $name\nEmail: $email\nWebsite: $website\nMessage:\n$message";
            }

            $mail->send();
            $status = 'success';
            $status_message = 'Form successfully submitted!';

        
    } catch (Exception $e) {
        $status_message = $e->getMessage();
    }
    
    header("Location: $url.php?status=$status&message=" . urlencode($status_message));
    exit();
}
?>

