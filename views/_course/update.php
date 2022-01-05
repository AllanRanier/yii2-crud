<?php
use \yii\helpers\Url;

/* @var $this yii\web\View */
?>
<h1>Edição de curso</h1>

<form name="form" action="<?=  Url::to(['course/update', 'id' => $model->id ]) ?>" method="POST">
    <input type="hidden" name="<?= \Yii::$app->request->csrfParam; ?>" value="<?= \Yii::$app->request->csrfToken; ?>">
    <div class="form-group">
        <label for="">Name:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" value="<?= $model->name; ?>"> 
    </div>
    <div class="form-group">
        <label for="">Hours:</label>
        <input type="text" class="form-control" id="hours" name="hours" placeholder="Digite a carga horária"  value="<?= $model->hours; ?>"> 
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
