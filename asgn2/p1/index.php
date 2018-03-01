<?php

  /*
    TODO: Output the following info in a "plain text file" (newline will be
    preserverd in the browser when the output is treated as a plain text file.)

    1. The operating system of the client machine as one of the following
        "Windows", "Mac", "Other"
    2. The browser type (as one of the following values)
      "Chrome", "Edge", "Firefox", "Safari", "Other"
  */

function get_browser_type(){
  if(false!==strpos($_SERVER['HTTP_USER_AGENT'],'MSIE 9.0')){  
    return 'Internet Explorer 9.0';  
  }  
  if(false!==strpos($_SERVER['HTTP_USER_AGENT'],'MSIE 8.0')){  
      return 'Internet Explorer 8.0';  
  }  
  if(false!==strpos($_SERVER['HTTP_USER_AGENT'],'MSIE 7.0')){  
      return 'Internet Explorer 7.0';  
  }  
  if(false!==strpos($_SERVER['HTTP_USER_AGENT'],'MSIE 6.0')){  
      return 'Internet Explorer 6.0';  
  }  
  if(false!==strpos($_SERVER['HTTP_USER_AGENT'],'Firefox')){  
      return 'Firefox';  
  }  
  if(false!==strpos($_SERVER['HTTP_USER_AGENT'],'Chrome')){  
      return 'Chrome';  
  }  
  if(false!==strpos($_SERVER['HTTP_USER_AGENT'],'Safari')){  
      return 'Safari';  
  }  
  return 'Other';
} 
  

function get_os_type(){
  if(false!==strpos($_SERVER['HTTP_USER_AGENT'],'Windows')){  
    return 'Windows';  
  }  
  if(false!==strpos($_SERVER['HTTP_USER_AGENT'],'Macintosh')){  
      return 'Macintosh';  
  }  
  if(false!==strpos($_SERVER['HTTP_USER_AGENT'],'Linux')){  
      return 'Linux';  
  }  
  return 'Other';
}

echo 'Your browser is ';
echo get_browser_type();
echo '<br>';
echo 'Your OS is ';
echo get_os_type();
?>
