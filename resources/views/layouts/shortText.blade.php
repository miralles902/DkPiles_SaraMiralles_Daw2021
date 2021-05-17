<?php
    if (!function_exists('getShortedString')) {
        function getShortedString($text, $length = null)
        {
            $formatedString = ucwords($text);

            if ($length != null) {
                if (strlen($formatedString) <= $length) {
                    return $formatedString;
                } else {
                    $y = substr($formatedString, 0, $length) . '...';
                    return $y;
                }
            } else {
                return $formatedString;
            }
        }
    } ?>