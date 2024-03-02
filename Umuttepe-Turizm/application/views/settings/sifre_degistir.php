<style>
    .form-control {
        padding: 20px;
    }
</style>
<?php
if (isset($data['result'])){
	echo $data['result'];
}
?>
<form method="post" class="row" style="margin: 8px;">
	<div class="col-md-6">
        <div class="form-group">
            <label for="account-fn">Mevcut Şifre</label>
            <input class="form-control" name="mevcut"  type="password" id="account-fn" value="" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="account-ln">Yeni Şifre</label>
            <input class="form-control" name="newPass" type="password" id="account-phone" value="" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="account-email">Yeni Şifre (Tekrar)</label>
            <input class="form-control" name="newPassAgain" type="password" id="account-email" value="" >
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
			<input type="hidden" name="page" value="sifreDegistir">
            <button class="btn btn-style-1 btn-primary" type="submit"  data-toast data-toast-position="topRight"
                data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Success!"
                data-toast-message="Your profile updated successfuly.">Şifremi Güncelle</button>
        </div>
    </div>
</form>
