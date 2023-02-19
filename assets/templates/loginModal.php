        <!-- Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="modallabel">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal">Connexion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                        <form id="form" method="POST" action="/user/login.php">
                            <input type="email" class="form-control" name="email" placeholder="Votre email" required="required"><br>
                            <input type="password" class="form-control" name="pwd" placeholder="Mot de passe" required="required"><br>
                        
                            <a href="#">
                                <button class="btn btn-starter">
                                    Mot de passe oublié ?
                                </button>
                            </a>
                    </div>
                    <div class="modal-footer">
                        <a href="/user/registrer.php">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">S'inscrire</button>
                        </a>
                        
                        <button type="submit" class="btn btn-primary">
                            Se connecter
                        </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>