<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><!--[site_name]--></title>
<style type="text/css">
html, body {
   text-align: center;
}
#wrapper {
   width: 700px;
   margin: 0 auto 0 auto;
   text-align: left;
   padding: 10px;
   background: #eee;
   border: 4px outset #ccc;
}
#footer {
   margin: 10px 0 0 0; 
   font-size: 80%;
   color: #ccc;
}
#error {
   border: 1px solid red;
   padding: 2px;
   margin: 5px 0 15px 0;
   background: #eee;
}
.center { text-align: center; }

/* TOOLTIP HOVER EFFECT */
#tooltip{ 
   width:20em; background: #fff;
}
</style>
<?php echo injectionJS(); /* Javascript for redirection direct to proxified pages */ ?>
</head>
<body>
   
   <div id="wrapper">

      <h1 class="center"><a href="index.php"><!--[site_name]--></a></h1>

      <!--[error]-->
      
      <h2>About</h2>
      
      <!--[description]-->
      
      <h2>Enter URL</h2>
               
      <form action="includes/process.php?action=update" method="post" onsubmit="return updateLocation(this);">
         <input type="text" name="u" id="input" size="40">
         <input type="submit" value="Go">
         
         <h3>Options</h3>
         
         <ul id="options">
<?php foreach ( $toShow as $option ) echo <<<HTML
            <li>
               <input type="checkbox" name="{$option['name']}" id="{$option['name']}"{$option['checked']}>
               <label for="{$option['name']}" onmouseover="tooltip('{$option['escaped_desc']}')" onmouseout="exit();">{$option['title']}</label>
            </li>

HTML;
?>
         </ul>
      
      </form>
      
      <p class="center">&copy; 2008 <a href="index.php"><!--[site_name]--></a> : Powered by <a href="http://www.glype.com/">glype</a> <!--[version]--></p>
      
   </div>
   
</body>
</html>