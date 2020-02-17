<div class="container">
    <br>
    <h3>Les produits</h3>
    <div class="row product_list ">

        {foreach $products as $product}
            <div class="col-md-3 product_card ">
                <a href="product?id={$product->getId()}">
                    <div class="card">
                    <img src="./views/img/products/{$product->getId()}.jpg" class="card-img-top" alt="{$product->getName()}">
                    <div class="card-body">
                        <h5 class="card-title">{$product->getName()}</h5>
                        <p class="card-text">{$product->getShortDescription()}</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="#" class="btn btn-primary add-to-cart mx-auto"><i class="fa fa-cart"></i> Add to cart</a>
                            </div>
                            <div class="col-sm-6 price">
                                {$product->getPrice()|number_format:2}€
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        {/foreach}

    </div>
    <br>

</div>