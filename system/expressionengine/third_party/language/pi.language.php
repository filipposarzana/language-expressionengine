<?php

  if (!defined('BASEPATH')) exit('No direct script access allowed');

  $plugin_info = array(
    'pi_name' => 'Translate for EE',
    'pi_version' => '0.1',
    'pi_author' => 'Filippo Sarzana',
    'pi_author_url' => 'http://digitalnatives.it/',
    'pi_description' => 'Returns the specified language line',
    'pi_usage' => Language::usage()
  );

  /**
   * Language Class
   *
   * @package			ExpressionEngine
   * @category		Plugin
   * @author			Filippo Sarzana
   * @copyright		Copyright (c) 2013, Filippo Sarzana
   * @link			  https://github.com/filipposarzana/language-expressionengine
   */

  class Language
  {

    function __construct()
    {
      $this->EE =& get_instance();
    }
    
  	/**
  	 * Get
  	 *
  	 * This function returns the language line variable so you don't have to use PHP in templates
  	 *
  	 * @access	public
  	 * @return	string
  	 */  
    function get()
    {

      $lang_file = ($this->EE->TMPL->fetch_param('file')) ? $this->EE->TMPL->fetch_param('file') : 'custom_label';

      $this->EE->lang->loadfile($lang_file);

      $param = $this->EE->TMPL->fetch_param('value');

      $string = ($this->EE->lang->line($param)) ? $this->EE->lang->line($param) : '';

      return $string;

    }

  	/**
  	 * Usage
  	 *
  	 * This function describes how the plugin is used.
  	 *
  	 * @access	public
  	 * @return	string
  	 */
  	
    function usage()
    {
      ob_start(); 
    ?>

    Outputs a string value from the available language files.

    {exp:language:get value="key" file="file_name"}

    <?php
      $buffer = ob_get_contents();
  	
      ob_end_clean(); 

      return $buffer;
    }

  }
/* End of file pi.language.php */ 
/* Location: ./system/expressionengine/third_party/language/pi.language.php */