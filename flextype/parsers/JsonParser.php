<?php

/**
 * @package Flextype
 *
 * @author Sergey Romanenko <hello@romanenko.digital>
 * @link http://romanenko.digital
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

class JsonParser
{

    /**
     * Encode options
     *
     * Bitmask consisting of encode options
     * https://www.php.net/manual/en/function.json-encode.php
     *
     * @var int
     */
    public static $encode_options = JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT;

    /**
     * Encode Depth
     *
     * Set the maximum depth.
     *
     * @var int
     */
    public static $encode_depth = 512;

    /**
     * Decode assoc
     *
     * Set the maximum depth.
     *
     * @var int
     */
    public static $decode_assoc = true;

    /**
     * Decode Depth
     *
     * Set the maximum depth.
     *
     * @var int
     */
    public static $decode_depth = 512;

    /**
     * Decode options
     *
     * Bitmask consisting of decode options
     * https://www.php.net/manual/en/function.json-decode.php
     *
     * @var int
     */
    public static $decode_options = 0;

    /**
     * Returns the JSON representation of a value
     *
     * $result = JsonParser::encode($json_content);
     *
     * @param mixed $input A string containing JSON
     * @param int $encode_depth User specified recursion depth.
     * @param int $encode_options Bitmask consisting of encode options.
     * @return mixed The JSON converted to a PHP value
     *
     */
    public static function encode($input, int $encode_options = 0, int $encode_depth = 512) : string
    {
        $encoded = @json_encode(
            $input,
            $encode_options ? $encode_options : JsonParser::$encode_options,
            $encode_depth ? $encode_depth : JsonParser::$encode_depth
                   );

        if ($encoded === false) {
            throw new \RuntimeException('Encoding JSON failed');
        }

        return $encoded;
    }

    /**
     * Takes a JSON encoded string and converts it into a PHP variable.
     *
     * $array = JsonParser::decode($json_file_content);
     *
     * @param string $input A string containing JSON
     * @param bool $decode_assoc When TRUE, returned objects will be converted into associative arrays.
     * @param int $decode_depth User specified recursion depth.
     * @param int $decode_options Bitmask consisting of decode options.
     * @return mixed The JSON converted to a PHP value
     *
     * @throws ParseException If the JSON is not valid
     */
    public static function decode(string $input, bool $decode_assoc = true, int $decode_depth = 512, int $decode_options = 0)
    {
        $decoded = @json_decode(
            $input,
            $decode_assoc ? $decode_assoc : JsonParser::$decode_assoc,
            $decode_depth ? $decode_depth : JsonParser::$decode_depth,
            $decode_options ? $decode_options : JsonParser::$decode_options
                   );

        if ($decoded === false) {
            throw new \RuntimeException('Decoding JSON failed');
        }

        return $decoded;
    }
}
