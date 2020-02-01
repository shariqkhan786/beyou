<?php
 function getToken()
{
    $data = "AptiQuiz";	
    $token_number = hash('sha512', $data);
    return $token_number;
}