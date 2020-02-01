<?php

if (!function_exists('render')) {

    function template($view, $data) {
        // $title['title'] = $data['title'];
        $ci = &get_instance();
        $ci->load->view('src/header');
        $ci->load->view('src/sidebar');
        // $ci->load->view('src/_navbar');
        // $ci->load->view('Website/include/message');
        $ci->load->view($view, $data); //page content
        $ci->load->view('src/footer');
    }
 
}
?>