<?php

class FormValidator
{
    public $valid;


    function alert($msg) {
        if(!$this->valid){
        echo "<script type='text/javascript'>alert('$msg');</script>";
        }
    }

    public function __construct(){
        $this->valid=true;
    }

    public function isValid($string)
    {
        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $string))
            {
                return FALSE;
            }
            return TRUE;
    }


    public function isEmpty($string)
    {
        if (empty($string)) {
            return TRUE;
        }
    
    }

    public function containsLetters($string)
    {
        if(preg_match("/[a-z]/i", $string)){
            return TRUE;
        }
        return FALSE;
    }
}