<div class="custom-modal custom-modal--feedback">
    <div class="close-modal">
        <div class="line line--left"></div>
        <div class="line line--right"></div>
    </div>
    <div class="custom-modal-header">
        <h2 class="title">
            Свяжитесь с нами
        </h2>
    </div>
    <div class="custom-modal-body">
        <form method="post" action="../../mail-send.php" id="form-feedback">
            <div class="form-column">
                <div class="form-group">
                    <label for="user-name--<?= $name = generateRandomString(); ?>">Ваше имя</label>
                    <input type="text" name="name" class="form-control"
                           id="user-name--<?= $name; ?>" placeholder="Имя" required>
                </div>
                <div class="form-group">
                    <label for="user-phone--<?= $tel = generateRandomString(); ?>">Номер телефона</label>
                    <input type="tel" name="phone" class="form-control"
                           id="user-phone--<?= $tel; ?>" placeholder="Телефон" required>
                </div>
                <div class="form-group">
                    <label for="user-email--<?= $email = generateRandomString(); ?>">E-mail</label>
                    <input type="email" name="email" class="form-control"
                           id="user-email--<?= $email; ?>" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                    <label for="user-message--<?= $message = generateRandomString(); ?>">Ваше сообщение</label>
                    <textarea name="message" class="form-control form-control--textarea"
                              id="user-message--<?= $message; ?>" placeholder="Ваше сообщение" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">отправить</button>
            </div>
        </form>
    </div>
</div>

<div class="modal-mask"></div>