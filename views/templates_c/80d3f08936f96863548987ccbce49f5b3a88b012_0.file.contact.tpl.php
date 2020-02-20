<?php
/* Smarty version 3.1.33, created on 2020-02-19 21:45:35
  from 'C:\wamp64\www\site\views\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4dac7f68b7d3_72308885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80d3f08936f96863548987ccbce49f5b3a88b012' => 
    array (
      0 => 'C:\\wamp64\\www\\site\\views\\templates\\contact.tpl',
      1 => 1582148734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4dac7f68b7d3_72308885 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <br>
    <h3>CONTACT</h3>
    <br>
    <div class="container">
        <form>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="lastname">Nom</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Entrer votre nom" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="firstname">Prénom</label>
                    <input type="text" class="form-control" id="firstname" placeholder="Entrer votre prénom" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Entrer votre email" required>
                    <small>Doit être une adresse email valide.</small>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="phone">Téléphone</label>
                    
                    <input type="tel" class="form-control" id="phone" placeholder="Entrer votre n° de téléphone" pattern="[0-9]{10}" required>
                    
                    <small>Exemple : 0474698574 </small>
                </div>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="msg" oninput="charLeft()" maxlength="2000" class="form-control" id="message" rows="18" minlength="50" maxlength="2000" placeholder="Entrer votre message..." required></textarea>
                <small id="r"></small>

            </div>
            <button class="btn btn-primary" type="submit">Envoyer le message</button>
        </form>
    </div><?php }
}
