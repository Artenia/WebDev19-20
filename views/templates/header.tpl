<head>
    <title>{$title}</title>
    {if isset($assets) && is_array($assets)}
        {*CSS INCLUSION*}
        {if !empty($assets['css'])}
            {foreach $assets['css'] as $css}
            <link rel="stylesheet" type="text/css" href="{$css}" media="screen">
            {/foreach}
        {/if}
        {*END - CSS INCLUSION*}

        {*BOOTSTRAP INCLUSION*}
        {if isset($bootstrap) && $bootstrap}
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        {/if}
        {*END - BOOTSTRAP INCLUSION*}

        {*JS INCLUSION*}
        {if !empty($assets['js'])}
            {foreach $assets['js'] as $js}
                <script src="{$js}"></script>
            {/foreach}
        {/if}
        {*END - JS INCLUSION*}
    {/if}

</head>
<body onload="charLeft()">
    <header id="header" class="bg-light">
        {* HEADER EXAMPLE FROM BOOSTRAP DOCUMENTATION*}
        <nav class="navbar navbar-expand-lg navbar-light  container" >
            <a class="navbar-brand" href="home"><img src="./views/img/logo.jpg" height="48px"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                   <li class="nav-item active">
                        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Produits
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            {foreach $categories as $categorie}
                                <a class="dropdown-item" href="categorie?id={$categorie['cat_id']}&cat_nom={$categorie['cat_nom']}">{$categorie['cat_nom']}</a>
                            {/foreach}
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="contact">Contact <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="search?" method="get">
                    <input class="form-control mr-sm-2" name="keyword" type="search" placeholder="Entrer le mot clé" required>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
                </form>
            </div>
        </nav>
        {* END - HEADER EXAMPLE FROM BOOSTRAP DOCUMENTATION*}
    </header>