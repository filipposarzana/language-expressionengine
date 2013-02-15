Language for Expression Engine v2.0+

=========================

Get a line of lang file without using php in you template!

Simple and quick:


{exp:language:get value="key" file="file_name"}

[key] is the key of the language array in your [file_name].

If no [file_name] has been specified [file_name] = custom_label.


$lang = array(
  'site_description'			=> 	'Website description',
	'site_keywords'				=> 	'website, keywords, key, web, site',
);

{exp:language:get value="site_description"} will echo 'Website description' from /sytem/expressionengine/language/english/custom_label_lang.php


P®OBO ©®™.
