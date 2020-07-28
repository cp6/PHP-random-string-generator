<?php

class stringGen
{
    public int $character_count;
    public string $characters_type;
    public string $custom_characters;

    /**
     * Set the parameters for the string to be generated
     * @param int $character_count amount of characters to be in the string
     * @param string $characters_type ALL | ALLNOSYMBOLS | NUMBERS | LOWERCASE | UPPERCASE | SYMBOLS
     * @param string $custom_characters Use only characters from here, leave empty to ignore
     */
    public function __construct(int $character_count = 16, string $characters_type = 'ALL', string $custom_characters = '')
    {
        $this->character_count = $character_count;
        $this->characters_type = $characters_type;
        $this->custom_characters = $custom_characters;
    }

    /**
     * Returns the string as per defined
     * @return string
     */
    public function generate():string
    {
        if ($this->custom_characters == '') {
            if ($this->characters_type == 'ALL') {
                $character_pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-_+=~[]{}\|<>?/';
            } elseif ($this->characters_type == 'ALLNOSYMBOLS') {
                $character_pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            } elseif ($this->characters_type == 'NUMBERS') {
                $character_pool = "0123456789";
            } elseif ($this->characters_type == 'LOWERCASE') {
                $character_pool = "abcdefghijklmnopqrstuvwxyz";
            } elseif ($this->characters_type == 'UPPERCASE') {
                $character_pool = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            } elseif ($this->characters_type == 'SYMBOLS') {
                $character_pool = "!@#$%^&*()-_+=~[]{}\|<>?/";
            }
        } else {
            $character_pool = $this->custom_characters;
        }
        $char_length = strlen($character_pool);
        $the_string = '';
        for ($i = 0; $i < $this->character_count; $i++) {
            $the_string .= $character_pool[mt_rand(0, $char_length - 1)];
        }
        return $the_string;
    }
}
