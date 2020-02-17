<div class="container">
    <br>
    <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./views/img/sliders/1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./views/img/sliders/2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./views/img/sliders/3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <br>
    <div class="row">
        <blockquote class="blockquote mx-auto">
            <p class="mb-0">"You can't afford those precious items... Please, go away..."</p>
            <footer class="blockquote-footer">The Webmaster</footer>
        </blockquote>
    </div>
    <br>

    <h3>BEST SELLERS</h3>
    <div class="row product_list ">
        {foreach $bests as $product}
            <a href="product?id={$product->getId()}">
               <div class="col-md-3 product_card ">
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
               </div>
            </a>
        {/foreach}
    </div>
    <br><br><br>

</div>