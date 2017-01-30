<?php
namespace App\Helpers;

/**
* Response Wrapper Class
*/
class JResponse
{
    /**
     * Error formated reponse
     * @param  string $message message to set as any error for error response
     * @return Array formated error response
     */
    public function error($message='')
    {
        return array('stat'=> 'error' , "message" => $message);
    }
    /**
     * Success formated reponse
     * @param  string $date Date to set for any success response
     * @return Array formated success response
     */
    public function data($data='')
    {
        // if there is data to be set for success response
        if ($data) {
            return array('stat'=> 'ok', "data" => $data);
        } else {
            // success response without any success data
            return array('stat'=> 'ok');
        }
    }
}
