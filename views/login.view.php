<div class="login-overlay">
    <div class="center-box login-form">
        <div class="mb-3">
            <span class="greekstagram-icon">
                <img src="../images/old-man.svg">
                <div>
                    <h3>Greekstagram</h3>
                </div>
            </span>
        </div>

        <form method="POST" name="frmLogin" onsubmit="return false;">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required />
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" required />
            </div>

            <input type="hidden" name="crf_token" value="<?= createToken() ?>">

            <div class="mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-dark" value="Login" />
                    </div>
                    <div class="col-md-6">
                        <div id="login-message"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="js/partials/login.js"></script>