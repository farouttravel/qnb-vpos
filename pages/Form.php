<?php /** @var array $pageData */ ?>

<form method="post" class="form-horizontal" action="/?p=Review">
    <h2>
        TXN Type: <?= isset($_GET['t']) ? $_GET['t'] : ""; ?>
    </h2>
    <br/>

    <input type="hidden" name="vpos[action]" value="<?= $pageData['action'] ?>"/>

    <?php foreach ($pageData['parameters'] as $name => $value) : ?>
        <?php if ($name !== 'Rnd' and $name !== 'Hash') : ?>
            <div class="form-group form-group-sm">
                <label class="col-sm-2 control-label" for="<?= $name ?>Id"><?= $name ?></label>
                <div class="col-sm-10">
                    <input
                            type="text"
                            class="form-control"
                            name="<?= 'vpos[fields][' . $name . ']' ?>"
                            value="<?= !empty($value) ? $value : $pageData['dummyData'][$name] ?>"
                            id="<?= $name ?>Id"
                    />
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>

    <input type="submit" class="btn btn-primary" value="Review"/>
</form>