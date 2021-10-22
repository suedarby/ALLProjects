<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.12
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2021 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 *
 * Base on: Opaque ID Encoder
 * (c) 2011 Marek Z. @marekweb
 */

namespace app\helpers;

/**
 * Class OpaqueEncoder
 * Translates between 32-bit integers (such as resource IDs) and obfuscated
 * scrambled values, as a one-to-one mapping. Supports hex and base64 url-safe
 * string representations. Expects a secret integer key in the constructor.
 * @package app\helpers
 */
class OpaqueEncoder {

    private $key;
    private $extraChars = '.-';
    private $encoding;

    const ENCODING_INT = 0;
    const ENCODING_HEX = 1;
    const ENCODING_BASE64 = 2;

    /**
     * @param int $key Secret key used for lightweight encryption.
     * @param int $encoding
     */
    public function __construct($key, $encoding = self::ENCODING_HEX) {
        $this->key = $key;
        $this->encoding = $encoding;
    }

    /**
     * Produce an integer hash of a 16-bit integer, returning a transformed 16-bit integer.
     * @param $i
     * @return int
     */
    protected function transform($i) {
        $i = ($this->key ^ $i) * 0x9e3b;
        return $i >> ($i & 0xf) & 0xffff;
    }

    /**
     * Reversibly transcode a 32-bit integer to a scrambled form, returning a new 32-bit integer.
     * @param $i
     * @return int
     */
    public function transcode($i) {
        $r = $i & 0xffff;
        $l = $i >> 16 & 0xffff ^ $this->transform($r);
        return (($r ^ $this->transform($l)) << 16) + $l;
    }

    /**
     * Encode a value according to the encoding mode selected upon instantiation.
     * @param $i
     * @return int|string
     */
    public function encode($i) {
        switch ($this->encoding) {
            case self::ENCODING_INT:
                return $this->transcode($i);

            case self::ENCODING_BASE64:
                return $this->encodeBase64($i);

            case self::ENCODING_HEX:
            default:
                return $this->encodeHex($i);
        }
    }

    /**
     * Decode a value according to the encoding mode selected upon instantiation.
     * @param $s
     * @return int
     */
    public function decode($s) {
        switch ($this->encoding) {
            case self::ENCODING_INT:
                return $this->transcode($s);

            case self::ENCODING_BASE64:
                return $this->decodeBase64($s);

            case self::ENCODING_HEX:
            default:
                return $this->decodeHex($s);

        }
    }

    /**
     * Transcode an integer and return it as an 8-character hex string.
     * @param $i
     * @return string
     */
    public function encodeHex($i) {
        return dechex($this->transcode($i));
    }

    /**
     * Transcode an integer and return it as a 6-character base64 string.
     * @param $i
     * @return string
     */
    public function encodeBase64($i) {
        return strtr(substr(base64_encode(pack('N', $this->transcode($i))), 0, 6), '+/', $this->extraChars);
    }

    /**
     * Decode an 8-character hex string, returning the original integer.
     * @param $s
     * @return int
     */
    public function decodeHex($s) {
        return $this->transcode(hexdec($s));
    }

    /**
     * Decode a 6-character base64 string, returning the original integer.
     * @param $s
     * @return int
     */
    public function decodeBase64($s) {
        $unpacked = unpack('N', base64_decode(strtr($s, $this->extraChars, '+/')));
        return $this->transcode($unpacked[1]);
    }
}