<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
    'pi_name'        => 'MyPlugin',
    'pi_version'     => '1.0.0',
    'pi_author'      => 'Bradley Flood',
    'pi_author_url'  => 'http://www.bradleyflood.com/',
    'pi_description' => 'Description of my plugin',
    'pi_usage'       => Myplugin::usage()
);


class Myplugin
{




    public function Myplugin()
    {
        $this->EE =& get_instance();
    }





    /**
     * HELLO
    */
    public function hello()
    {
        // Grab template tag parameter
        $string = ee()->TMPL->fetch_param('string');
        
        // {exp:myplugin:hello string="Hello World!"}
        return $string;
    }





    /**
    * Usage - EE Control Panel
    */
    public function usage()
    {
        ob_start(); 
        ?>

        MyPlugin Instructions

        <?php
        $buffer = ob_get_contents();

        ob_end_clean(); 

        return $buffer;
    }





}
