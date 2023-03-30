<?php /** @var array $pageData */ ?>

<h2>Review</h2>

<form method="post" action="<?= $_POST['vpos']['action'] ?>">
    <table class="table table-hover">
        <tr>
            <th>Data Name</th>
            <th>Value</th>
        </tr>
        <?php foreach ($_POST['vpos']['fields'] as $name => $value) : ?>
            <tr>
                <td><?= $name ?></td>
                <td><?= $value ?></td>
                <input type="hidden" name="<?= $name ?>" value="<?= $value ?>"/>
            </tr>
        <?php endforeach; ?>
        <?php if ($_POST['vpos']['fields']['SecureType'] !== 'NonSecure') : ?>
            <tr>
                <td>Rnd</td>
                <td><?= $pageData['Rnd'] ?></td>
                <input type="hidden" name="Rnd" value="<?= $pageData['Rnd'] ?>"/>
            </tr>
            <tr>
                <td>Hash</td>
                <td><?= $pageData['Hash'] ?></td>
                <input type="hidden" name="Hash" value="<?= $pageData['Hash'] ?>"/>
            </tr>
        <?php endif; ?>
    </table>

    <button type="button" onclick="history.back();return false;" class="btn btn-danger">Back</button>
    <button type="submit" class="btn btn-primary">Proceed</button>
</form>