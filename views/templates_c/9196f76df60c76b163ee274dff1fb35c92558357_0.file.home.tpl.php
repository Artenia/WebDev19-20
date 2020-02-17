<?php
/* Smarty version 3.1.33, created on 2020-02-17 15:04:38
  from 'C:\wamp64\www\site\views\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4aab869463e6_51440878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9196f76df60c76b163ee274dff1fb35c92558357' => 
    array (
      0 => 'C:\\wamp64\\www\\site\\views\\templates\\home.tpl',
      1 => 1581951877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4aab869463e6_51440878 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bests']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
            <a href="product?id=<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
">
               <div class="col-md-3 product_card ">
                   <div class="card">
                    <img src="./views/img/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
.jpg" class="card-img-top" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>
">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>
</h5>
                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['product']->value->getShortDescription();?>
</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="#" class="btn btn-primary add-to-cart mx-auto"><i class="fa fa-cart"></i> Add to cart</a>
                            </div>
                            <div class="col-sm-6 price">
                                <?php echo number_format($_smarty_tpl->tpl_vars['product']->value->getPrice(),2);?>
€
                            </div>
                        </div>
                    </div>
                </div>
               </div>
            </a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <br><br><br>

</div><?php }
}
