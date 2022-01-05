<?php
use \yii\helpers\Url;
/* @var $this yii\web\View */
?>
<h1>Listagem de cursos</h1>

<h5><a href="<?=  Url::to(['course/create']) ?>" class="btn btn-info btn-sm">Novo curso</a></h3>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Hours</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($courses as $course): ?>
            <tr>
                <td><?= $course->id; ?></td>
                <td><?= $course->name; ?></td>
                <td><?= $course->hours; ?></td>
                <td>
                    <a href="<?=  Url::to(['course/update', 'id' => $course->id]) ?>" class="btn btn-secondary btn-sm">Editar</a>
                    <a href="<?=  Url::to(['course/delete', 'id' => $course->id]) ?>" class="btn btn-danger btn-sm">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
