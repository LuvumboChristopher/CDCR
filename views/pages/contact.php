<style>
    html {
        background: url("./images/fond/admin-fond.png") no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>
<div class="contact-container">
    <div class="form-block-container ">
        <form class="form-block" action="http://foo.com" method="post">
            <div class="form-block-left">
                <label class="form-label" for="nom">Nom</label>
                <input class="form-input" type="text" name="nom" id="nom" required >
                <label class="form-label" for="prenom">Prenom</label>
                <input class="form-input"  type="text" name="prenom" id="prenom" required>
                <label class="form-label" for="telephone">Telephone</label>
                <input class="form-input"  type="tel" id="phone" name="phone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" minlength="10" maxlength="10" required>
                <label class="form-label" for="mail">Adresse mail</label>
                <input class="form-input"  type="email" name="" id="email" required>  
            </div>
            <div class="form-block-right">
                <label class="form-label" for="message">Message</label>
                <textarea class="form-textarea"  name="message" id="message" maxlength="800" minlength="4" required></textarea>
                <div class="checkbox-container">
                    <input class="checkbox-input" type="checkbox" id="termes" name="termes" value="termes">
                    <label class="checkbox-label" for="termes">En soumettant ce formulaire, j'accepte que les informations saisies soient
                        traitées par CDCR.</label>
                </div>
                <div class="form-button-container" >
                    <input class="form-button" type="submit" value="Envoyer">
                </div>        
            </div>
        </form>
    </div>  
    <iframe  class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.872152099951!2d4.824759215567856!3d45.77375237910579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4eb1cb4d3089b%3A0x390ad85a8c66b228!2s108%20Bd%20de%20la%20Croix-Rousse%2C%2069001%20Lyon!5e0!3m2!1sfr!2sfr!4v1630256292805!5m2!1sfr!2sfr" ></iframe>   
</div>
