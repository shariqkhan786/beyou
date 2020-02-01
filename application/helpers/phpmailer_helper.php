<?php

function send_email($to, $subject, $view, $data = '') {
    $ci = & get_instance();
    $ci->load->library('email');
    $result = $ci->email
            ->from('shyam.androapps@gmail.com','Leo Media digital')
            ->to($to)
            ->subject($subject)
            ->message($ci->load->view('emails/' . $view, $data, true))
            ->set_mailtype('html')
            ->send();
    return $result;
}
 
