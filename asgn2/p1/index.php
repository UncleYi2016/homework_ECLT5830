<?php

  /*
    TODO: Output the following info in a "plain text file" (newline will be
    preserverd in the browser when the output is treated as a plain text file.)

    1. The operating system of the client machine as one of the following
        "Windows", "Mac", "Other"
    2. The browser type (as one of the following values)
      "Chrome", "Edge", "Firefox", "Safari", "Other"
  */
echo $_SERVER['HTTP_USER_AGENT'];
?>
