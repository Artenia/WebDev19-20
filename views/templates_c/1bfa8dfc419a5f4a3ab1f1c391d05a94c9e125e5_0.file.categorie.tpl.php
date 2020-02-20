<?php
/* Smarty version 3.1.33, created on 2020-02-19 22:27:49
  from 'C:\wamp64\www\site\views\templates\categorie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4db665d9ad71_08633687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bfa8dfc419a5f4a3ab1f1c391d05a94c9e125e5' => 
    array (
      0 => 'C:\\wamp64\\www\\site\\views\\templates\\categorie.tpl',
      1 => 1582151268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4db665d9ad71_08633687 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <br>
    <h3><?php echo $_smarty_tpl->tpl_vars['cat_nom']->value;?>
</h3>
    <div class="row product_list ">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
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
