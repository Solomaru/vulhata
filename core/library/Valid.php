<?php


class Valid
{
    
    #проверяем почту 
    public static function checkEmail($email){
        
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
        
        
    }
    
    
}





?>