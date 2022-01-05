<?php

namespace app\controllers;

use app\models\Course;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $courses = Course::find()->all();

        foreach($courses as $course){
            echo "{$course->id} - {$course->name} - {$course->hours}<br>";
        }
    }

}
