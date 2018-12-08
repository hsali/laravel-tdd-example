<?php
/**
 * Created by PhpStorm.
 * User: shehbaz
 * Date: 12/8/18
 * Time: 3:21 PM
 */

namespace App;


use Illuminate\Database\QueryException;

class CreateStudentErrorException extends \Exception
{

    /**
     * CreateBannerErrorException constructor.
     * @param \Exception|QueryException $e
     */
    public function __construct($e)
    {
    }
}