<div class="modal-body">
    <?php if (!empty($_SESSION['cart'])): ?>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Qty</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($_SESSION['cart'] as $id => $item): ?>
                <tr>
                    <td><a href="#"><img src="picture/<?= $item['attels'] ?>" alt="<?= $item['nosaukums'] ?>"></a></td>
                    <td><a href="#"><?= $item['nosaukums'] ?></a></td>
                    <td><?= $item['cena'] ?></td>
                    <td><?= $item['qty'] ?></td>
                </tr>
            <?php endforeach; ?>

            <tr>
                <td colspan="4" align="right">Preces: <span id="modal-cart-qty"><?= $_SESSION['cart.qty'] ?></span>
                    <br> Summa <?= $_SESSION['cart.sum'] ?> .
                </td>
            </tr>
            </tbody>
        </table>
    <?php else: ?>
        <p>Grozs ir tukš...</p>
    <?php endif; ?>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-primary">Apmaksat</button>
    <button type="button" class="btn btn-primary" id="clear">Nodzest visu</button>
</div>
