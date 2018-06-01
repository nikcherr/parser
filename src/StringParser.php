<?php

namespace nikcherr\parser;

class StringParser {
    
    public function roundBracket($string): bool{
        $len = strlen($string);
        $left = 0;
        $right = 0;
        if(preg_match("/^[^(]*\)|[^() \t\n\r]/", $string)){
            throw new \InvalidArgumentException("Invalid argument");
        }
        else{
            for($i = 0; $i < $len; $i++){
                switch ($string[$i]){
                    case '(' : $left++;
                        break;
                    case ')' : $right++;
                        break;
                }
            }
            if($left == $right){
                return true;
            }
        }
        return false;
    }
}
