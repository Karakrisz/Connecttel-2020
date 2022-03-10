<main class="container login-container">
    <div class="login-container-content">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                <form method="post" action="/login">
                    <?php if ($containsError) : ?>
                        <div class="alert alert-danger">
                            valami nem ok, próbáld meg újra
                        </div>
                    <?php endif ?>
                    <div class="from-group">
                        <label for="email">Email cím</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="írd be az email címed....">
                    </div>
                    <div class="from-group">
                        <label for="password">Jelszó</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Írd be a jelszavad...">
                    </div>
                    <button type="submit" class="btn btn-primary">Bejelentkezés</button>
                </form>
            </div>
        </div>
    </div>
</main>