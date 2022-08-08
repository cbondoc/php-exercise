<!DOCTYPE html>
<html lang="en">

<head>
    @include('navbar')
</head>

<body>
    <?php
    function json_error_message($json_str)
    {
        $json[] = $json_str;

        foreach ($json as $string) {
            echo 'Decoding: ' . $string . "\n";
            json_decode($string);

            switch (json_last_error()) {
                case JSON_ERROR_NONE:
                    echo ' - No errors' . "\n";
                    break;
                case JSON_ERROR_DEPTH:
                    echo ' - Maximum stack depth exceeded' . "\n";
                    break;
                case JSON_ERROR_STATE_MISMATCH:
                    echo ' - Underflow or the modes mismatch' . "\n";
                    break;
                case JSON_ERROR_CTRL_CHAR:
                    echo ' - Unexpected control character found' . "\n";
                    break;
                case JSON_ERROR_SYNTAX:
                    echo ' - Syntax error, malformed JSON' . "\n";
                    break;
                case JSON_ERROR_UTF8:
                    echo ' - Malformed UTF-8 characters, possibly incorrectly encoded' . "\n";
                    break;
                default:
                    echo ' - Unknown error' . "\n";
                    break;
            }
        }
    }
    json_error_message('{"color1": "Red Color"}');
    ?>
</body>

</html>