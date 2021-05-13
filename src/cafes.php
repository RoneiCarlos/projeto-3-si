<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Cafés - Sanctus Grano</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" puqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="cafes.css" rel="stylesheet" media="all" />
    <link rel="icon" href="../img/icon.png">
    <title>Cafes</title>

    <style>
        .tooltip {
            position:absolute;
            background-color:#ddcdbf;
            font-size: smaller;
            color:#161412;
            font-wheight: 800;
            padding:4px;
            padding-top: 100px;
            width: 250px;
            height: 350px;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <?php require('header_in_sys.php'); ?>
    <section class="box">
        <?php
            //importa o json de cafes
            $cfs_json = file_get_contents('../data/cafes.json');
            //transforma o json pra phpobject
            $cfs = json_decode($cfs_json);

            //importa o json de usuarios
            $usrs_json = file_get_contents('../data/usuarios.json');

            //itera sobre todos os cafés e insere o elemento na tela de acordo com a iteração
            foreach ($cfs as $k => $c) {
                echo('<div class="boximg">
                        <img src="../img/refil.png" class="imgh">
                        <br>
                        <div class="overlay">
                            
                            <div class="overcontent">
                                <h3>Preço: R$'.$c->preco.',00</h3>
                                <p>
                                    '.$c->descricao.'
                                </p>
                                <abbr title="Adicionado ao carrinho"><button type="button" class="button tool" onclick="addCart('.$k.')">Adicionar ao carrinho</button></abbr>
                            </div>
                        </div>                  
                        <h1>'.$c->nome.' - '.$c->peso.'g</h1>

                    </div><br>');
            }
        ?>
    </section>

    <button class="button" onclick="goCart();">Finalizar compras</button>
    <?php require('footer_in_sys.php'); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="cafes.js"></script>
    <script>

        /**
 * touchHover.js
 *
 * Create tooltips on mouseover or on click (for supporting touch interfaces).
 * 
 * @author C. Scott Asbach
 */

$(document).ready(function() {	
	
	/**
	 * store the value of and then remove the title attributes from the
	 * abbreviations (thus removing the default tooltip functionality of
         * the abbreviations)
	 */
	$('abbr').each(function(){		
		
		$(this).data('title',$(this).attr('title'));
		$(this).removeAttr('title');
	
	});

        /**
	 * when abbreviations are mouseover-ed show a tooltip with the data from the title attribute
	 */	
	$('abbr').click(function() {		
		
		// first remove all existing abbreviation tooltips
		$('abbr').next('.tooltip').remove();
		
		// create the tooltip
		$(this).after('<span class="tooltip">' + $(this).data('title') + '</span>');
		
		// position the tooltip 4 pixels above and 4 pixels to the left of the abbreviation
		var left = $(this).position().right + $(this).width() - 10;
		var top = $(this).position().top - 350;
		$(this).next().css('left',left);
		$(this).next().css('top',top);				
		
	});
	
	/**
	 * when abbreviations are clicked trigger their mouseover event then fade the tooltip
	 * (this is friendly to touch interfaces)
	 */
	$('abbr').click(function(){
		
		$(this).mouseover();
		
		// after a slight 2 second fade, fade out the tooltip for 1 second
		$(this).next().animate({opacity: 1},{duration: 300, complete: function(){
			$(this).fadeOut(500);
		}});
		
	});
	
		
	
});
    </script>
</body>
</html>