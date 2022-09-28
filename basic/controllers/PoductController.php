<?php

namespace app\controllers;

use app\models\Poduct;
use app\models\CategorySearch;
use app\models\MaterialSearch;
use app\models\SeasonSearch;
use app\models\ManufacturerSearch;
use app\models\Category;
use app\models\Season;
use app\models\Material;
use app\models\Manufacturer;
use app\models\PoductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PoductController implements the CRUD actions for Poduct model.
 */
class PoductController extends Controller
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
     * Lists all Poduct models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PoductSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $category = new category();
        $searchModel = new CategorySearch();
        $manufacturer = new manufacturer();
        $searchModelmanufacturer = new ManufacturerSearch();
        $season = new season();
        $searchModelSeason = new SeasonSearch();
        $material = new material();
        $searchModelmaterial = new MaterialSearch();
        $category = $searchModel->search($this->request->queryParams);
        $manufacturer = $searchModelmanufacturer->search($this->request->queryParams);
        $material = $searchModelmaterial->search($this->request->queryParams);
        $season = $searchModelSeason->search($this->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'category' => $category,
            'material' => $material,
            'season' => $season,
            'manufacturer' => $manufacturer,
        ]);
    }

    /**
     * Displays a single Poduct model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $category = new category();
        $searchModel = new CategorySearch();
        $manufacturer = new manufacturer();
        $searchModelmanufacturer = new ManufacturerSearch();
        $season = new season();
        $searchModelSeason = new SeasonSearch();
        $material = new material();
        $searchModelmaterial = new MaterialSearch();
        $category = $searchModel->search($this->request->queryParams);
        $manufacturer = $searchModelmanufacturer->search($this->request->queryParams);
        $material = $searchModelmaterial->search($this->request->queryParams);
        $season = $searchModelSeason->search($this->request->queryParams);
        return $this->render('view', [
            'model' => $this->findModel($id),
            'id' => $id,
            'category' => $category,
            'material' => $material,
            'season' => $season,
            'manufacturer' => $manufacturer,
        ]);
    }

    /**
     * Creates a new Poduct model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Poduct();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Poduct model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Poduct model.
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
     * Finds the Poduct model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Poduct the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Poduct::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function CategorySearch($id)
    {
        if (($category = category::findOne(['id' => $id])) !== null) {
            return $category;
        }

        throw new NotFoundHttpException('Неправильно подключена категрия');
    }

    protected function MaterialSearch($id)
    {
        if (($material = material::findOne(['id' => $id])) !== null) {
            return $material;
        }

        throw new NotFoundHttpException('не указан материал');
    }

    protected function SeasonSearch($id)
    {
        if (($season = season::findOne(['id' => $id])) !== null) {
            return $season;
        }

        throw new NotFoundHttpException('сезон не указан');
    }

    protected function ManufacturerSearch($id)
    {
        if (($manufacturer = manufacturer::findOne(['id' => $id])) !== null) {
            return $manufacturer;
        }

        throw new NotFoundHttpException('производитель не указан');
    }
}
