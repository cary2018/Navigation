<div class="row">
    <div class="col-lg-5">
        <form id="form-signup" action="/index.php?r=test/login" method="post" role="form">
            <input type="hidden" name="_csrf" value="TGIuVnozbVcuPXQQKQUMMCkIFz4RZi4jehdvFxt4PCF1LRsYG3xaAA==">
            <div class="form-group field-signupform-username required">
                <label class="control-label" for="signupform-username">Username</label>
                <input type="text" id="signupform-username" class="form-control" name="username" autofocus>

                <p class="help-block help-block-error"></p>
            </div>
            <div class="form-group field-signupform-email required">
                <label class="control-label" for="signupform-email">Email</label>
                <input type="text" id="signupform-email" class="form-control" name="SignupForm[email]">

                <p class="help-block help-block-error"></p>
            </div>
            <div class="form-group field-signupform-password required">
                <label class="control-label" for="signupform-password">Password</label>
                <input type="password" id="signupform-password" class="form-control" name="SignupForm[password]">

                <p class="help-block help-block-error"></p>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="signup-button">Signup</button>                </div>

        </form>
    </div>
</div>
