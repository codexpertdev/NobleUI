<?php


namespace App\Constants;


class ResponseCodes
{
    const SUCCESS = 200;
    const CLIENT_ERROR = 400;
    const SERVER_ERROR = 500;
    const VALIDATION_ERROR = 406;
    const UNAUTHORIZED_USER = 401;
    const DAILY_REPORT_ALREADY_ADDED = 420; // for new take 430,440,450,460
    const INACTIVE_USER = 401;
}
