<?php
/* Smarty version 3.1.33, created on 2020-02-17 14:13:58
  from 'C:\wamp64\www\site\views\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4a9fa6bf07b1_95335446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9e857311bde509862af6ea8221df958f550c45d' => 
    array (
      0 => 'C:\\wamp64\\www\\site\\views\\templates\\product.tpl',
      1 => 1581948838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4a9fa6bf07b1_95335446 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <br>
    <div class="row">
        <div class="col-md-12">
            <h2 class="bd-title"><?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>
</h2>
            <h6 class="bd-lead"><?php echo $_smarty_tpl->tpl_vars['product']->value->getShortDescription();?>
</h6>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img src="./views/img/products/<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>
">
        </div>
        <div class="col-md-5">
            <p>
                <?php echo $_smarty_tpl->tpl_vars['product']->value->getLongDescription();?>

            </p>
        </div>
        <div class="col-md-3 bg-primary">
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <label><?php echo $_smarty_tpl->tpl_vars['product']->value->getPrice();?>
€</label><br>
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
        <?php echo var_dump($_smarty_tpl->tpl_vars['product']->value);?>

    </div>
</div><?php }
}
