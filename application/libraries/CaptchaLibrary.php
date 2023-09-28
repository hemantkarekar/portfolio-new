<?php

/**
 * ### Pre-requisites:
 * 
 * Libraries:
 * captcha
 * 
 * Helpers:
 * file
 * string
 */
class CaptchaLibrary
{
    public function create()
    {
        $vals = array(
            'word'          => random_string('alnum', 5),
            'img_path'      => './assets/captcha/',
            'img_url'       => base_url('assets/captcha/'),
            'font_path'     => base_url('assets/fonts/') . 'texb.ttf',
            'img_width'     => '120',
            'img_height'    => '35',
            'expiration'    => 7200,
            'word_length'   => 4,
            'font_size'     => 20,
            'img_id'        => 'Imageid',
            'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

            // White background and border, black text and red grid
            'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
            )
        );
        delete_files('./assets/captcha/');
        $cap = create_captcha($vals);
        return $cap;
    }
}
