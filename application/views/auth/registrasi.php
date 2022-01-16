    <div class="center">
        <h2>Create an Account!</h2>
        <form method="post" action="<?= base_url('auth/registrasi'); ?>">
            <div class="txt_field">
                <input type="text" id="name" name="name" value="<?= set_value('name'); ?>" required>
                <span></span>
                <label>Nama</label>
            </div>
            <div class="txt_field">
                <input type="text" id="email" name="email" value="<?= set_value('email'); ?>" required>
                <span></span>
                <label>E-Mail</label>
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="txt_field">
                <input type="password" id="password1" name="password1" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="txt_field">
                <input type="password" id="password2" name="password2" required>
                <span></span>
                <label>Confirm Password</label>
                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <button type="submit">REGISTRASI</button>
            <div class="signup_link">
                Already have an account? <a href="<?= base_url('auth'); ?>">Login</a>
            </div>
        </form>
    </div>