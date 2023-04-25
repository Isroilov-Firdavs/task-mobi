<?php

namespace frontend\controllers;

use frontend\models\Commit;
use frontend\models\CommitSerch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CommitController implements the CRUD actions for Commit model.
 */
class CommitController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['index'],
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],                     
                ],
            ],
        ];
    }

    /**
     * Lists all Commit models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CommitSerch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    

}
