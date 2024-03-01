<style>
    .form-control {
        padding: 20px;
    }
</style>

<form class="row" style="margin: 8px;">
    <div class="col-md-6">
        <div class="form-group">
            <label for="account-fn">Ad - Soyad</label>
            <input class="form-control" type="text" id="account-fn" value="Daniel" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="account-ln">Telefon Numarası</label>
            <input class="form-control" type="text" id="account-phone" value="+7 (805) 348 95 72" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="account-email">E-Posta Adresi</label>
            <input class="form-control" type="email" id="account-email" value="daniel.adams@example.com" disabled>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="account-phone">TC Kimlik No</label>
            <input class="form-control" type="text" id="account-phone" value="+7 (805) 348 95 72" disabled>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="dtarihi">Doğum Tarihi</label>
            <input class="form-control" type="datetime" id="dtarihi" value="28.10.2003" readonly>
        </div>
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
                data-toast-message="Your profile updated successfuly.">Profili Güncelle</button>
        </div>
    </div>
</form>