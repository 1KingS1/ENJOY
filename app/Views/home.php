<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="<?= base_url('css/style.css'); ?>" />
    <title><?= lang('home.pagetitle') ?></title>
    <?php
        if($contraste){
            echo "<script src='js/contraste.js'></script>";
        }
    ?>
</head>
<body>
    <div class="top">
        <div class="logo">
            <img src="<?= base_url('img/logo-sf.png'); ?>"></img>
        </div>
        <div class="acessibilidade">
            <p>A+</p>
            <p>A</p>
            <p>A-</p>
            <p><?= lang('home.nav1') ?></p>
            <a href="contraste"><p><?= lang('home.nav2') ?></p></a>
            <a href="lang/pt-br"><p><?= lang('home.langpt') ?></p></a>
            <a href="lang/es"><p><?= lang('home.langes') ?></p></a>
        </div>
    </div>
    <nav>
        <ul class="menu">
            <li>
                    <a class="titulo-menu" href="#"><?= lang('home.title') ?></a>
            </li>
            <li>
                <a href="#"><?= lang('home.li1') ?></a>
                    <ul>
                        <li>
                            <a href="<?= Base_url('Cliente');?>"><?= lang('home.list1') ?></a>
                        </li>
                    </ul>
            </li>
            <li>
                <a href="#"><?= lang('home.li2') ?></a>
                    <ul>
                        <li>
                            <a href="<?= Base_url('Fornecedor');?>"><?= lang('home.list2') ?></a>
                        </li>
                    </ul>
            </li>
            <li>
                <a href="#"><?= lang('home.li3') ?></a>
                <ul>
                    <li>
                        <a href="<?= Base_url('Vendedor');?>"><?= lang('home.list3') ?></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><?= lang('home.li4') ?></a>
                <ul>
                    <li>
                        <a href="<?= Base_url('Venda');?>"><?= lang('home.list4') ?></a>
                    </li>
                </ul>
            </li>
<li>
                <a href="#"><?= lang('home.li5') ?></a>
                <ul>
                    <li>
                        <a href="<?= Base_url('Produto');?>"><?= lang('home.list5') ?></a>
                    </li>
                </ul>
            </li>
<li>
                <a href="#"><?= lang('home.li6') ?></a>
                <ul>
                    <li>
                        <a href="<?= Base_url('Estoque');?>"><?= lang('home.list6') ?></a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</body>
</html>

<!--

<ul class="menu">
		<li><a href="#">Home</a></li>
		<li><a href="#">Sobre</a></li>
	  		<li><a href="#">O que fazemos?</a>
	         	<ul>
	                  <li><a href="#">Web Design</a></li>
	                  <li><a href="#">SEO</a></li>
	                  <li><a href="#">Design</a></li>
	       		</ul>
			</li>
		<li><a href="#">Links</a></li>
		<li><a href="#">Contato</a></li>
</ul>
</nav>
-->
