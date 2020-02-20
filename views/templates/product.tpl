<div class="container">
    <br>
    <div class="row">
        <div class="col-md-12">
            <h2 class="bd-title">{$product->getName()}</h2>
            <h6 class="bd-lead">{$product->getShortDescription()}</h6>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img src="./views/img/products/{$product->getId()}.jpg" alt="{$product->getName()}" width="400" height="400">
        </div>
        <div class="col-md-5">
            <p>
                {$product->getLongDescription()}
            </p>
        </div>
        <div class="col-md-3 bg-primary">
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <label>{$product->getPrice()}€</label><br>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            Quantité :
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Number</label>
                            <div class="col-4">
                                <input class="form-control" type="number" value="42" id="example-number-input">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        {$product|var_dump}
    </div>
</div>