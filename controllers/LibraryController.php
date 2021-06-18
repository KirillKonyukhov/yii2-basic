<?php
namespace app\controllers;
use yii\web\Controller;
use yii\data\Pagination;
use Yii;
use app\models\avtor;
use app\models\ganr;
use app\models\books;
use app\models\books1;

class LibraryController extends Controller
{
    public function actionCreate()
    {
        $avtor = new avtor();
        if( $avtor->load(Yii::$app->request->post()) && $avtor->validate() ) {
            if( $avtor->save() ) {
                return $this->refresh();
            }
        }
        return $this->render('create', ['avtor' => $avtor]);
    }

public function actionFind2(){
    $books = new books1();
    if ($books->load(Yii::$app->request->post()))
    {
      $name = $books->nazvanie;
      $query = books::find();
      $books = $query->
      where(['like','nazvanie', $name])->
      all();
      return $this->render('find22', [
          'books' => $books,
      ]);}
    else {
        return $this->render('find2', [
            'books' => $books,
        ]);
    }
}

public function actionDelet(){
    $avtor = new avtor();
    $query = avtor::find();
    $dells = $query->
    all();
    if ($avtor->load(Yii::$app->request->post()) && $avtor->avtor_id)
    {
      $id = $avtor->avtor_id;
      avtor::deleteAll(['=','avtor_id',$id]);
      return $this->refresh();
    }
    return $this->render('delet', [
        'avtor' => $avtor,
    ]);
}
    public function actionFind(){
        $this->view->title = 'find';
        $query= books::find();
        $books = $query->orderBy('god')->all();
        $books = books::find()->where(['LIKE', 'god', '19' . '%', false])->all();
        return $this->render('find', [
            'books' => $books,
        ]);
    }

    public function actionFind1(){
        $this->view->title = 'find1';
        $query = $books = books::find()
        ->select(['avtor_id', 'COUNT(avtor_id) AS kolvo'])
        ->groupBy('avtor_id')
        ->all();
        /*->leftJoin('books','avtor_id = avtor_id')
        ->all();*/
        return $this->render('find1', [
            'books' => $books,
        ]);
    }

    public function actionDelete($avtor_id)
    {
        $this->findAvtor($avtor_id)->delete();
        return $this->redirect(['index']);

    }

    public function actionIndex()
    {
      $this->view->title = 'Index';
        $query = avtor::find();
        $pagination = new Pagination([
            'defaultPageSize' => 20,
            'totalCount' => $query->count(),
        ]);
        $avtor = $query->orderBy('avtor_id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('index', [
            'avtor' => $avtor,
            'pagination' => $pagination,
        ]);
    }

    public function actionGanr()
    {
      $this->view->title = 'ganr';
        $query = ganr::find();
        $pagination = new Pagination([
            'defaultPageSize' => 20,
            'totalCount' => $query->count(),
        ]);
        $ganr = $query->orderBy('ganr_id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('ganr', [
            'ganr' => $ganr,
            'pagination' => $pagination,
        ]);
    }

    public function actionBooks()
    {
      $this->view->title = 'books';
        $query = books::find();
        $pagination = new Pagination([
            'defaultPageSize' => 20,
            'totalCount' => $query->count(),
        ]);
        $books = $query->orderBy('book_id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('books', [
            'books' => $books,
            'pagination' => $pagination,
        ]);
    }
}
