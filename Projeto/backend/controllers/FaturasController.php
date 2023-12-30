<?php

namespace backend\controllers;

use app\models\SearchCliente;
use backend\models\Fatura;
use backend\models\LinhaFatura;
use common\models\Artigos;
use common\models\User;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FaturasController implements the CRUD actions for Fatura model.
 */
class FaturasController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Fatura models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Fatura::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Fatura model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */


    public function actionSelecionarClientes(){


        $searchModel = new SearchCliente();

        $provider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('selecionar_clientes', [
            'dataProvider' => $provider,
            'searchModel' =>$searchModel,


        ]);
    }








    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Fatura model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate($users_id)
    {
        $model = new Fatura();


        $model->users_id = $users_id;

        if ($model->save()) {

            return $this->render('create', [
                'model' => $model,

            ]);
        }
        else {
            $model->loadDefaultValues();
        }


    }

   /* public function actionCreate($users_id)
    {
        $model = new Fatura();
        $linhafatura = new LinhaFatura();
        $model->users_id = $users_id;


        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            return $this->redirect(['view', 'id' => $model->id]);
        }


        return $this->render('create', [
            'model' => $model,
            'linhafatura' => $linhafatura,
        ]);
    }*/

    /**
     * Updates an existing Fatura model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = Fatura::findOne($id);

        // Carregar as linhas de fatura associadas a esta fatura
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => LinhaFatura::find()->where(['faturas_id' => $id]),
        ]);

        return $this->render('update', [
            'model' => $model,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Deletes an existing Fatura model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Fatura model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Fatura the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Fatura::findOne(['id' => $id])) !== null) {
            return $model;
        }


        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
