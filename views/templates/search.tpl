<div class="container">
    <br>
    <div class="row">
        <h2>Les résultats pour : "{$keyword}"</h2>
    </div>
    <div class="row">
        {foreach $products as $product}
            <div class="card col-md-4" style="width: 18rem;">
                <img src="./views/img/products/{$product->getId()}.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{$product->getName()}</h5>
                    <p class="card-text">{$product->getShortDesc()}</p>
                    <a href="product?id={$product->getId()}">Plus d'info..</a>
                </div>
            </div>
        {/foreach}
    </div>
</div>

