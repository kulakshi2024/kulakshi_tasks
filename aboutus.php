<?php
include "header.php";
?>
<h2>About Us</h2>
<script>
    // this is a comment
document.write(Hello World)
//triggering an alert box
window.alert ("This is an alert box")


</script>
<noscript>
    If javascipt is not enabled this will be displayed so user know they need to enable js.
</noscript>

<script>
    //documents .write but after loading the page
    function hello{
        document.write("This is after the page has loaded")
    }
      
</script>

<button onclick="document.write('This is something')"> Click Me </button>
