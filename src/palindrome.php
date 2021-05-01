<?php

// https://leetcode.com/problems/valid-palindrome/submissions/

function isPalindrome($s) {
    if (empty($s)) {
        return false;
    }

    $s = preg_replace("/[^A-Za-z0-9]/", "", strtolower($s));

    $length = strlen($s);

    if ($length == 1) {
        return true;
    }

    $reverceStrign = "";
    for ($i = $length - 1; $i >= 0; $i--) {
        $reverceStrign .= $s[$i];
    }

    if ($s === $reverceStrign) {
        return true;
    }

    return false;
}

$string = "A man, a plan, a canal: Panama";
var_dump(isPalindrome($string));

/*if ($string == strrev($string)) {
    echo "palindrome" . PHP_EOL;
}*/
