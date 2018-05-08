<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Guitar;

class GuitarController extends Controller
{
    public function actionIndex()
    {
        $query = Guitar::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $guitars = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'guitars' => $guitars,
            'pagination' => $pagination,
        ]);
    }
}