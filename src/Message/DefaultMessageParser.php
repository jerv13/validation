<?php

namespace JervDesign\InputFilter\Message;

/**
 * Class DefaultMessageParser Returns unchanged string
 */
class DefaultMessageParser implements MessageParser
{
    /**
     * parseParams
     *
     * @param string $string
     * @param array  $options
     *
     * @return string
     */
    public function parse($string, $options = [])
    {
        return $string;
    }
}
