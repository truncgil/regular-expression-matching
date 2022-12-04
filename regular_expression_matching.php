<?php 
class Solution {

    /**
     * @param String $string
     * @param String $pattern
     * @return Boolean
     */
    function isMatch($string, $pattern) {
        $modifiedPattern = '/(^' . $pattern . '$)/i';
        return preg_match($modifiedPattern, $string);
    }
}
