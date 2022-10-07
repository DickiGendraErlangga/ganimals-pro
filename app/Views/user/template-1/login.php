<div class="edit_profile register ">
    <div class="container" style=" margin-bottom: -100px;">
        <div class="row">
            <div class="col-lg-8"></div>
            <div class="col-lg-4">

                <div class="right_part space-y-20">
                    <h1 class="color_white"> <?= ucwords($title) ?> </h1>
                    <p class="color_white" style="color: white !important">Don't have an account yet? <a href="<?= base_url() ?>auth/register"> Register </a>
                    </p>
                    <form id="auth-form">
                        <div class="box edit_box w-full space-y-20">
                            <div class="space-y-10">
                                <input type="email" id="user-email" placeholder="Your Email" autocomplete="off" required>
                            </div>
                            <div class="space-y-10">
                                <input type="password" id="user-password" placeholder="Your Password" autocomplete="off" required>
                            </div>
                            <button type="submit" class="btn btn-grad w-full btn-lg ">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>