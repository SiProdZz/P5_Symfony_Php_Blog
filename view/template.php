<!DOCTYPE html>
<html>
    <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Jessy BROS | Blog d�veloppeur web</title>
        <link rel="icon" type="image/png" href="public/images/logo.png" />
        <META NAME="Description" CONTENT=" Bienvenue sur le blog de Jessy BROS, � l'occasion d'un projet de cours.">
    </head>

    <body>
        <header>
	        <img style="height:100px;" src="public/images/logo.png" alt="logo | Blog d�veloppeur web"/>
	        <nav>
		        <a href="http://localhost/p5_symfony_php_blog/">Accueil</a>
		        <a href="blogs">Blogs</a>
	        </nav>
        </header>

        <?= $content ?>

        <footer>

            <div>
               
               <img style="height:100px;" src="public/images/logo.png" alt="logo | Blog d�veloppeur web"/>
                <ul>

                    <li>
                        <a href="https://www.facebook.com/jessy.bros.1">
                            <i>facebook</i>
                        </a>
                    </li>

                    <li>
                        <a href="https://github.com/SiProdZz">
                            <i>GitHub</i>
                        </a>
                    </li>
                </ul>

            <div>

            <div>
                <p>COPYRIGHT � <?php echo date("Y"); ?> - Jessy BROS</p>
            <div>
        </footer>

    </body>
</html>