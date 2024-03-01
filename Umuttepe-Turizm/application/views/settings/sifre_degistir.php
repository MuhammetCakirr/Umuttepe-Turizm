<style>
    .form-control {
        padding: 20px;
    }
</style>

<form class="row" style="margin: 8px;">
    <div class="col-md-6">
        <div class="form-group">
            <label for="account-fn">Mevcut Şifre</label>
            <input class="form-control" type="text" id="account-fn" value="" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="account-ln">Yeni Şifre</label>
            <input class="form-control" type="text" id="account-phone" value="" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="account-email">Yeni Şifre (Tekrar)</label>
            <input class="form-control" type="email" id="account-email" value="" >
        </div>
    </div>

    <div class="col-12">
    <small class="form-text text-muted"  id="passwordHelpBlock">Şifreniz 8-20 karakter uzunluğunda olmalı, harf ve rakam içermeli ve boşluk, özel karakter veya emoji içermemelidir.</small>
    </div>
    
    <!-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-confirm-pass">Mevcut Şifre</label>
                            <input class="form-control" type="password" id="account-confirm-pass">
                        </div>
                    </div> -->
    <div class="col-12">
        <hr class="mt-2 mb-3">
        <div class="d-flex flex-wrap justify-content-between align-items-center">

            <button class="btn btn-style-1 btn-primary" type="button" data-toast data-toast-position="topRight"
                data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Success!"
                data-toast-message="Your profile updated successfuly.">Şifremi Güncelle</button>
        </div>
    </div>
</form>


<!-- <div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="form-group">
                <label for="inputPasswordOld">Mevcut Şifre</label>
                <input class="form-control" id="inputPasswordOld" required="" type="password">
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="form-group">
                <label for="inputPasswordOld">Yeni Şifre</label>
                <input class="form-control" id="inputPasswordOld" required="" type="password">
                <small class="form-text text-muted" id="passwordHelpBlock">Your password must be 8-20 characters
                            long, contain letters and numbers, and must not contain spaces, special characters, or
                            emoji.</small>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="form-group">
                        <label for="inputPasswordNewVerify">Verify</label>
                        <input class="form-control" id="inputPasswordNewVerify" required="" type="password">
                        <span class="form-text small text-muted">To confirm, type the new password again.</span>
                    </div>
        </div>
        
    </div>
</div> -->

<!-- <div class="row justify-content-center">
    <div class="col-md-6">
        <span class="anchor" id="formChangePassword"></span>
        
        <div class="card card-outline-secondary">
            <div class="card-header">
                <h3 class="mb-0">Change Password</h3>
            </div>
            <div class="card-body">
                <form autocomplete="off" class="form" role="form">
                    <div class="form-group">
                        <label for="inputPasswordOld">Current Password</label>
                        <input class="form-control" id="inputPasswordOld" required="" type="password">
                    </div>
                    <div class="form-group">
                        <label for="inputPasswordNew">New Password</label>
                        <input class="form-control" id="inputPasswordNew" required="" type="password">
                        <small class="form-text text-muted" id="passwordHelpBlock">Your password must be 8-20 characters
                            long, contain letters and numbers, and must not contain spaces, special characters, or
                            emoji.</small>
                    </div>
                    <div class="form-group">
                        <label for="inputPasswordNewVerify">Verify</label>
                        <input class="form-control" id="inputPasswordNewVerify" required="" type="password">
                        <span class="form-text small text-muted">To confirm, type the new password again.</span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-lg float-right" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->