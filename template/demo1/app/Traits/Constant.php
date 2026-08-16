<?php

namespace App\Traits;

use App\Constants\ResponseCodes;

trait Constant
{
    public $successCode = ResponseCodes::SUCCESS;
    public $clientErrorCode = ResponseCodes::CLIENT_ERROR;
    public $serverErrorCode = ResponseCodes::SERVER_ERROR;
    public $defaultDateFormat = 'd-m-Y';
    public $defaultTimeFormat = 'H:i:s';
    public $defaultDateTimeFormat = 'd-m-Y H:i:s';

    /*
     * Images Paths
     * */
//    public $imageParentDirectory = '/api';
    public $imageParentDirectory = '';

    public $default_user_image = 'def_user.png';
    public $user_image_directory = '/images/users/';
    public $upload_user_image_directory = 'upload/';

    public function print($data)
    {
        echo "<pre>";
        printf($data);
        echo "</pre>";
    }

    public function echo($data)
    {
        echo $data, "\n";
    }
}
