<body>
	<h1>Projecte Welcome 1</h1>
    <p> No somos diseñadores lo siento :( </p>
	<ul>
	<link rel="stylesheet" href="index.css" type="text/css">
    <div class="contenedor-cosis">
	<?php 
        $imgs = scandir("./img",SCANDIR_SORT_ASCENDING);
        foreach( $imgs as $img ) {
            if( $img=="." || $img==".." )
                continue;
            if( substr($img,-3)=="jpg" or substr($img,-3)=="png"){
                $name = substr($img,0,-4);
            }else if (substr($img,-4)=="jpeg") {
                $name = substr($img,0,-5);
            }
            echo "<a href='profile/$name.html'>";
            echo "<img src='img/$img' width='130'>";
            echo $name."</a>";
            echo "<div></div>";
        }
    ?>
    </div>
</body>

