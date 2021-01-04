<div class="login-overlay">
    <div class="center-box register-form">
        <div class="mb-3">
            <span class="greekstagram-icon">
                <img src="../images/old-man.svg">
                <div>
                    <h3>Greekstagram - Register</h3>
                </div>
            </span>
        </div>

        <div class="alert alert-danger" id="register-message" role="alert"></div>
        <form method="POST" onsubmit="return false;" name="frmRegister" class="row g-3">
            <div class="col-md-6">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" maxlength="80" required>
            </div>
            <div class="form-group col-md-6">
                <label for="follows_god">Which God do you favor?</label>
                <select id="follows_god" class="form-control mt-2" name="follows_god">
                    <option selected>Choose...</option>
                    <option>Zeus</option>
                    <option>Hades</option>
                    <option>Gaia</option>
                    <option>Thanatos</option>
                </select>
            </div>
            <div class="col-md-12 mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" maxlength="255" required>
            </div>

            <div class="col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" maxlength="50" required>
            </div>

            <div class="col-md-6 mb-3">
                <label for="password_2">Repeat password</label>
                <input type="password" class="form-control" name="password_2" id="password_2" maxlength="50" required>
            </div>

            <input type="hidden" name="token" value="register">

            <div class="col-md-12 mb-3">
                <input type="submit" class="btn btn-dark" value="Submit">
                <input type="button" class="btn btn-dark" id="register-cancel" value="Cancel">
            </div>
        </form>
    </div>
</div>

<script src="../js/partials/register.js"></script>