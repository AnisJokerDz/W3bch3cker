<?php


@set_time_limit(0);
@error_reporting(0);



echo "\n \n
 
 
 
       
 _________________________________
  < Web-Checker by Anis Joker Dz >
  
      Made With Hunger 

                   I love Tacos
 ---------------------------------
  \     .    _  .    
   \    |\_|/__/|    
       / / \/ \  \  
      /__|+||+|__ \ 
     |/_ \_/\_/ _\ |  
     | | (____) | ||  
     \/\___/\__/  // 
     (_/         ||
      |          ||
      |           \   
       \        //_/  
        \______//
       __ || __||
      (____(____)

 
        \n";


$food = file_get_contents($argv[1]);
$food = explode("\r\n", $food);



foreach ($food as $tacos) 
{

trythe($tacos);
}




function trythe($url)
{


	$get = file_get_contents($url);


	if(strstr($get, 'wp-admin'))
	{
		file_put_contents("WP.txt", $url."\r\n" , FILE_APPEND);
		echo "\r\n[Target]:".$url.'   [WP]';


	}

	elseif(strstr($get, '?option=com_'))
	{
		file_put_contents("Joomla.txt", $url."\r\n" , FILE_APPEND);
		echo "\r\n[Target]:".$url.'   [Joomla]';

	}

	elseif(strstr($get, 'robots.txt'))
    {
    	file_put_contents("websites_with_robots.txt", $url."\r\n" , FILE_APPEND);
    	echo "\r\n[Target]:".$url.'   [Robots.txt]';

   	}

	elseif(strstr($get, 'sitemap.xml'))
    {

     file_put_contents("sitemap.txt", $url."\r\n" , FILE_APPEND);
    	echo "\r\n[Target]:".$url.'   [sitemap]';

   	}

	elseif(strstr($get, 'index.php?route'))
	{
		file_put_contents("OC.txt", $url."\r\n" , FILE_APPEND);
		echo "\r\n[Target]:".$url.'   [OC]';

	}

	elseif(strstr($get, '/node/'))
	{
		file_put_contents("drupal.txt", $url."\r\n" , FILE_APPEND);
		echo "\r\n[Target]:".$url.'   [Drupal]';

	}
	else

	{

		echo "\r\n[Target]:".$url.'   [not found please try wappalyzer]';
	}

	





	

}

?>

