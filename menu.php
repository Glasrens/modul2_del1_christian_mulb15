<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>php menu</title>
        <!-- definer funktionen $curpage -->
        <?php
		 	$curpage = basename($_SERVER['PHP_SELF']);
		?>
        <link rel="stylesheet" type="text/css" href="menu_and_footer.css">
    </head>
    
    <body>
    	<div id="menu_line">
        	<div id="menu_link">
            	<!-- hvis $curpage er opfyldt, indsæt (echo) klassen aktiv -->
                <a href="side1.php"
					<?php if ($curpage == 'side1.php'){
						echo 'class="active"';} ?>
                >TEST1</a>
                
				<a href="side2.php"
					<?php if ($curpage == 'side2.php'){
						echo 'class="active"';} ?>
                >TEST2</a>
                
				<a href="side3.php"
					<?php if ($curpage == 'side3.php'){
						echo 'class="active"'; } ?>
                >TEST3</a>
        	</div>
        </div>
    </body>
</html>