<?php

class Dummy {

    protected $CI;

    public function __construct()
    {
        $this->CI = get_instance();
        $this->CI->load->library('LoremIpsumGenerator', null, 'lipsum');
    }
    
    public function getContent($count = 10, $format = null, $lorem_ipsum = false)
    {
        return $this->CI->lipsum->getContent($count, $format, $lorem_ipsum);
    }

} 