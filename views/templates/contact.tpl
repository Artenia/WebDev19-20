<div class="container">
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
                    {literal}
                    <input type="tel" class="form-control" id="phone" placeholder="Entrer votre n° de téléphone" pattern="[0-9]{10}" required>
                    {/literal}
                    <small>Exemple : 0474698574 </small>
                </div>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="msg" oninput="charLeft()" maxlength="2000" class="form-control" id="message" rows="7" minlength="50" maxlength="2000" placeholder="Entrer votre message..." required></textarea>
                <small id="r"></small>

            </div>
            <button class="btn btn-primary" type="submit">Envoyer le message</button>
        </form>
    </div>
