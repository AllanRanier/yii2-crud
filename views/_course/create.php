<?php
use \yii\helpers\Url;

/* @var $this yii\web\View */
?>
<h1>Novo curso</h1>

<form name="form" action="<?=  Url::to(['course/create']) ?>" method="POST">
    <input type="hidden" name="<?= \Yii::$app->request->csrfParam; ?>" value="<?= \Yii::$app->request->csrfToken; ?>">
    <div class="form-group">
        <label for="">Name:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome"> 
    </div>
    <div class="form-group">
        <label for="">Hours:</label>
        <input type="text" class="form-control" id="hours" name="hours" placeholder="Digite a carga horária"> 
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
