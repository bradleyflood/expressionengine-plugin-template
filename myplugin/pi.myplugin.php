<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
	'pi_name'        => 'MyPlugin',
	'pi_version'     => '1.0.0',
	'pi_author'      => 'Author Name',
	'pi_author_url'  => 'http://www.flood7.com/',
	'pi_description' => 'Description of my plugin',
	'pi_usage'       => Myplugin::usage()
  );


class Myplugin
{

	public $return_data = ""; 

  public function Myplugin()
  {
    $this->EE =& get_instance();
  }
  
  /**
   * Usage
   * This function describes how the plugin is used.
   * @access  public
   * @return  string
   */
  public function hello()
  {
    return 'Hello world!'; // {exp:myplugin:hello}
  }


	/**
	 * Usage
	 * This function describes how the plugin is used.
	 * @access	public
	 * @return	string
	 */
	
  public function usage()
  {
	  ob_start(); 
	  ?>
	  
	  	<p>Instructions for using MyPlugin</p>

	  <?php
	  $buffer = ob_get_contents();
		
	  ob_end_clean(); 

	  return $buffer;
  }

}
