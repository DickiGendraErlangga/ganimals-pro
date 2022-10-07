<div class="edit_profile register">
    <div class="container">
        <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-6">
                <div class="right_part space-y-20">
                    <h1 class="color_white"> Register new account</h1>
                    <p class="color_white" style="color: white !important">Already an account ? <a href="<?= base_url() ?>auth"> Sign-In </a>
                    <div class="box edit_box w-full space-y-20">
                        <form method="post" action="<?= base_url ?>auth/register_post">
                            <div class="row">
                                <div class="form-group space-y-10 mb-0">
                                    <div class="space-y-20">
                                        <div class="space-y-10">
                                            <input class="form-control" type="text" name="user_name" placeholder="Your Name" autocomplete="off" required>
                                        </div>
                                        <div class="space-y-10">
                                            <input class="form-control" type="number" name="user_phone" placeholder="Your Phone" autocomplete="off" required>
                                        </div>
                                        <div class="space-y-10">
                                            <input class="form-control" type="email" name="user_email" placeholder="Your Email" autocomplete="off" required>
                                        </div>
                                        <div class="space-y-10">
                                            <input class="form-control" type="password" name="user_password" id="user-password" placeholder="Your Password" autocomplete="off" required>
                                        </div>
                                        <div class="space-y-10">
                                            <input class="form-control" type="password" id="user-repeat-password" placeholder="Repeat Your Password" autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hr"></div>
                            <a href="#" class="btn btn-grad">Register</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>