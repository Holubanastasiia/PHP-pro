<?php
const CONVERTER_MODE_UPPERCASE = 1; //all chars to upper case
const CONVERTER_MODE_LOWERCASE = 2; //all chars to lower case
const CONVERTER_MODE_UCFIRST = 3; //first char to upper case
const CONVERTER_MODE_UCWORDS = 4; //every first letter to upper case
const CONVERTER_MODE_INVERT = 5; // invert letters
function convectStr(string $input, int $mode): string
{
    if ($mode === 1) {
        $input = strtoupper($input);
    } elseif ($mode === 2) {
        $input = strtolower($input);
    } elseif ($mode === 3) {
        $input = strtolower($input);
        $input = ucfirst($input);
    } elseif ($mode === 4) {
        $input = strtolower($input);
        $input = ucwords($input);
    }
    return $input;

    $str = '';
    for ($i = 0; $i <= strlen($input); $i++) {
        if (ctype_lower($input[$i])) {
            $str .= strtoupper($input[$i]);
        } else {
            $str .= strtolower($input[$i]);
        }
    }
    return $str;
}

$res = convectStr('hElLo woRld', CONVERTER_MODE_INVERT);
echo $res;

