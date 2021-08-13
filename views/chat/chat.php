<div class="chat_login pt-5">
    <div class="text-center py-5">
        <img src="https://www.optazoom.com/images/logo.png" alt="SuperShop">
    </div>
    <div>
        <?= validation_errors() ?> 
        <?php if($this->session->flashdata('user_failed')) : ?>
        <p class="alert alert-danger"><?= $this->session->flashdata('user_failed') ?></p>  
        <?php endif; ?>
        <div class="row">
            <div class="offset-lg-4 col-lg-4 offset-md-2 col-md-8 col-12">
                <div class="form_chat">
                    <div class="logo_top">
                        <p class="text-center form-type"><?= $title  ?></p>
                    </div>
                    <div class="p-4 form_body">
                        <form id="loginForm" action="<?= base_url().'chat/login' ?>" method="post">
                          <div class="form-group">
                            <input type="text" id="username" class="form-control" name="username" placeholder="Username" required autofocus>
                            <small id="error1" class="alert alert-danger"></small>
                            <small id="error2" class="alert alert-danger"></small>
                          </div>
                          <button id="submit" type="submit" class="btn btn-theme-sm btn-block btn-theme-dark pull-right login_btn">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url() ?>js/validation.js"></script>
<style>
    body{
        min-height: 100vh !important;
        background: url(https://project8.solutionsplayers.com/uploads/category_image/image_bg.jpg);
        background-size: cover;
        
    }
    .logo_top{
        position: relative;
        display: block;
        height: auto;
        padding: 15px 0px;
        background: #515b6f96;
        border-top-left-radius: 6px;
        border-top-right-radius: 6px;
    }
    .form-type {
        font-size: 20px;
        color: #fff;
        font-weight: 600;
        margin-bottom: 0px;
    }
    .form_body{
        padding-bottom: 15px;
        border: solid 1px #e9e9e9;
        background-color: #ffffff91;
        box-shadow: 1px 1px 5px #e9e9e9;
        border-bottom-right-radius: 6px;
        border-bottom-left-radius: 6px;
    }
    .login_btn{
        background-color: #636c7e;
        border-color: #636c7e;
        color: #ffffff;
    }
    .form-control {
        height: 50px;
        border-radius: 0;
        border: 1px solid #c5c5c5!important;
    }
</style>
