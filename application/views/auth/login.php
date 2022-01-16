    <div class="center">
        <h2><img src="<?= base_url('admin/'); ?>img/logobpncolor.svg" width="60px"> &nbsp; Login Aplikasi BPN </h2>
        <div class="float-right mb-2"><a href="<?= base_url('landing/index'); ?>"><i class="m-r-10  fas fa-long-arrow-alt-left"></i>&nbsp;Back</a> &emsp;</div>
        <?= $this->session->flashdata('message'); ?>
        <form method="post" action="<?= base_url('auth'); ?>">
            <div class="txt_field">
                <input type="text" id="email" name="email" required>
                <span></span>
                <label>E-Mail</label>
            </div>
            <div class="txt_field">
                <input type="password" id="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <button type="submit">LOGIN</button>
            <div class="signup_link">
                Don't have an account? <a href="<?= base_url('auth/registrasi'); ?>">Sign Up</a>
            </div>
            <div class="float-right"></div>
        </form>
    </div>