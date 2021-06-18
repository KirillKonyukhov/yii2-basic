<?php
namespace app\controllers;
use yii\web\Controller;
use yii\data\Pagination;
use Yii;
use yii\data\ActiveDataProvider;
use app\models\BookingSearch;
use yii\db\Query;
use yii\db\QueryBuilder;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\booking;
use app\models\complaint;
use app\models\dolgnost;
use app\models\hotel;
use app\models\nomera;
use app\models\zatrat;
use app\models\sotrudnik;
use app\models\uslugi;

class HotelController extends Controller
{
public function actionZ1(){
    $booking = new booking();
    if ($booking->load(Yii::$app->request->post()))
    {
      $kolvo = $booking->n;
      $data1 = $booking->data1;
      $data2 = $booking->data2;
      $query = booking::find();
      $booking = $query
      ->select('idbooking, firm,')
      ->from('booking')
      ->where(['>=','kolvo_mest',$kolvo])
      ->andWhere(['NOT LIKE', 'firm', '-' . '%', false])
      ->andWhere(['between', 'data_booking',$data1, $data2])
      ->asArray()
      ->all();


      $dataProvider = new ActiveDataProvider([
        'query' => booking::find()
        ->where(['>=','kolvo_mest',$kolvo])
        ->andWhere(['NOT LIKE', 'firm', '-' . '%', false])
        ->andWhere(['between', 'data_booking',$data1, $data2]),
        'pagination' => [
            'pageSize' => 2
        ],
    ]);
      return $this->render('z1_1', [
          'booking' => $booking,
          'dataProvider' => $dataProvider,
      ]);
    }
    else {
        return $this->render('z1', [
            'booking' => $booking,
        ]);
    }
}

public function actionZ2(){
    $booking = new booking();
    if ($booking->load(Yii::$app->request->post()))
    {
      $kolvo = $booking->n;
      $data1 = $booking->data1;
      $data2 = $booking->data2;
      $query = booking::find();
      $booking = $query
      ->select('idbooking, client,')
      ->from('booking')
      ->where(['like','kolvo_mest',$kolvo])
      ->andWhere(['NOT LIKE', 'client', '-' . '%', false])
      ->andWhere(['between', 'data_booking',$data1, $data2])
      ->asArray()
      ->all();
      
      $count = booking::find([])
      ->select('count(client) cou')
      ->from('booking')
      ->where(['=','kolvo_mest',$kolvo])
      ->andWhere(['NOT LIKE', 'client', '-' . '%', false])
      ->andWhere(['between', 'data_booking',$data1, $data2])
      ->asArray()
      ->all();

      return $this->render('z2_2', [
           'count'=> $count,
          'booking' => $booking,
      ]);
    }
    else {
        return $this->render('z2', [
            'booking' => $booking,
        ]);
    }
}

public function actionZ3(){
    $this->view->title = 'z3';
      $query = nomera::find();
      $nomera = $query
      ->select('count(nomer_komanati) cou')
      ->from('nomera')
      ->where(['LIKE', 'booking', 'нет' . '%', false])
      ->asArray()
      ->all();

      return $this->render('z3', [
          'nomera' => $nomera,
      ]);
    }

public function actionZ4(){
    $nomera = new nomera();
    if ($nomera->load(Yii::$app->request->post()))
    {
      $etagi = $nomera->etag;
      $query = nomera::find();
      $nomera = $query
      ->select('count(nomer_komanati) cou')
      ->from('nomera')
      ->where(['like','etag',$etagi])
      ->asArray()
      ->all();

      return $this->render('z4_4', [
          'nomera' => $nomera,
      ]);
    }
    else {
        return $this->render('z4', [
            'nomera' => $nomera,
        ]);
    }
}

public function actionZ5(){
    $nomera = new nomera();
    if ($nomera->load(Yii::$app->request->post()))
    {
      $kolvo = $nomera->n;
      $query = nomera::find();
      $nomera = $query
      ->select('etag,mestnost_nomera,data_zas,')
     ->from('nomera')
      ->leftJoin('booking', 'nomera.nomer_komanati = booking.nomer_komanatii')
      ->where(['=','nomer_komanati',$kolvo])
      ->asArray()
      ->all();

      return $this->render('z5_5', [
          'nomera' => $nomera,
      ]);
    }
    else {
        return $this->render('z5', [
            'nomera' => $nomera,
        ]);
    }
}

public function actionZ6(){
    $nomera = new nomera();
    if ($nomera->load(Yii::$app->request->post()))
    {
      $data1 = $nomera->data1;
      $data2 = $nomera->data2;
      $query = nomera::find();
      $nomera = $query
      ->select('nomer_komanati,mestnost_nomera,data_vis,')
     ->from('nomera')
      ->innerJoin('booking', 'nomera.nomer_komanati = booking.nomer_komanatii')
      ->where(['between', 'data_vis',$data1, $data2])
      ->andWhere(['LIKE', 'booking', 'да' . '%', false])
      ->asArray()
      ->all();

      return $this->render('z6_6', [
          'nomera' => $nomera,
      ]);
    }
    else {
        return $this->render('z6', [
            'nomera' => $nomera,
        ]);
    }
}

public function actionZ7(){
    $booking = new booking();
    if ($booking->load(Yii::$app->request->post()))
    {
      $kolvo = $booking->firm1;
      $data1 = $booking->data1;
      $data2 = $booking->data2;
      $query = booking::find();
      $booking = $query
      ->select('firm, count(idbooking) cou,')
      ->from('booking')
      ->where(['=','firm',$kolvo])
      ->andWhere(['NOT LIKE', 'firm', '-' . '%', false])
      ->andWhere(['between', 'data_booking',$data1, $data2])
      ->groupBy('firm')
      ->asArray()
      ->all();
      
      $count = booking::find([])
      ->select('kolvo_mest')
      ->from('booking')
      ->where(['=','firm',$kolvo])
      ->andWhere(['NOT LIKE', 'firm', '-' . '%', false])
      ->andWhere(['between', 'data_booking',$data1, $data2])
      ->groupBy('kolvo_mest')
      ->orderBy('count(kolvo_mest) DESC')
      ->limit(1)
      ->asArray()
      ->all();

      return $this->render('z7_7', [
           'count'=> $count,
          'booking' => $booking,
      ]);
    }
    else {
        return $this->render('z7', [
            'booking' => $booking,
        ]);
    }
}

public function actionZ8(){
    $this->view->title = 'z8';
      $query = complaint::find();
      $complaint = $query
      ->select('client,opisanie_complaint')
      ->from('complaint')
      ->innerJoin('booking', 'complaint.id_complaint = booking.id_complaints')
      ->where(['NOT LIKE', 'opisanie_complaint', '-' . '%', false])
      ->andWhere(['NOT LIKE', 'client', '-' . '%', false])
      ->asArray()
      ->all();

      return $this->render('z8', [
          'complaint' => $complaint,
      ]);
    }

public function actionZ9(){
    $booking = new booking();
    if ($booking->load(Yii::$app->request->post()))
    {
      $kolvo = $booking->n;
      $data1 = $booking->data1;
      $data2 = $booking->data2;
      $query = booking::find();
      $booking = $query
      ->select('nomer_komanatii,sum(dolg) s')
      ->from('booking')
      ->where(['=','kolvo_mest',$kolvo])
      ->andWhere(['between', 'data_booking',$data1, $data2])
      ->groupBy('nomer_komanatii')
      ->asArray()
      ->all();
      
      $count = booking::find([])
      ->select('sum(dolg) s')
      ->from('booking')
      ->where(['=','kolvo_mest',$kolvo])
      ->andWhere(['between', 'data_booking',$data1, $data2])
      ->asArray()
      ->all();

      return $this->render('z9_9', [
           'count'=> $count,
          'booking' => $booking,
      ]);
    }
    else {
        return $this->render('z9', [
            'booking' => $booking,
        ]);
    }
}

public function actionZ10(){
    $booking = new booking();
    if ($booking->load(Yii::$app->request->post()))
    {
      $kolvo = $booking->n;
      $query = booking::find();
      $booking = $query
      ->select('client,price_uslugi,opisanie_complaint,name_uslugi')
      ->from('booking')
      ->innerJoin('complaint', 'booking.id_complaints = complaint.id_complaint')
      ->innerJoin('uslugi', 'booking.id_uslugis = uslugi.id_uslugi')
      ->where(['=','nomer_komanatii',$kolvo])
      ->andWhere(['NOT LIKE', 'client', '-' . '%', false])
      ->andWhere(['NOT LIKE', 'opisanie_complaint', '-' . '%', false])
      ->asArray()
      ->all();

      return $this->render('z10_10', [
          'booking' => $booking,
      ]);
    }
    else {
        return $this->render('z10', [
            'booking' => $booking,
        ]);
    }
}

public function actionZ11(){
    $booking = new booking();
    if ($booking->load(Yii::$app->request->post()))
    {
      $data1 = $booking->data1;
      $data2 = $booking->data2;
      $query = booking::find();
      $booking = $query
      ->select('idbooking, firm, document')
      ->from('booking')
      ->andWhere(['NOT LIKE', 'firm', '-' . '%', false])
      ->andWhere(['between', 'data_booking',$data1, $data2])
      ->asArray()
      ->all();

      return $this->render('z11_11', [
          'booking' => $booking,
      ]);
    }
    else {
        return $this->render('z11', [
            'booking' => $booking,
        ]);
    }
}

public function actionZ12(){
    $booking = new booking();
    if ($booking->load(Yii::$app->request->post()))
    {
      $kolvo = $booking->id_hotel1;
      $query = booking::find();
      $booking = $query
      ->select('idbooking,client,document,name_hotel')
      ->from('booking')
      ->innerJoin('hotel', 'booking.id_hotels = hotel.id_hotel')
      ->where(['=','id_hotels',$kolvo])
      ->andWhere(['NOT LIKE', 'client', '-' . '%', false])
      ->asArray()
      ->all();

      return $this->render('z12_12', [
          'booking' => $booking,
      ]);
    }
    else {
        return $this->render('z12', [
            'booking' => $booking,
        ]);
    }
}

public function actionZ13(){
    $booking = new booking();
    if ($booking->load(Yii::$app->request->post()))
    {
      $data1 = $booking->data1;
      $data2 = $booking->data2;
      $query = booking::find();
      $booking = $query
      ->select('idbooking,client,document,')
      ->from('booking')
      ->where(['between', 'data_booking',$data1, $data2])
      ->andWhere(['NOT LIKE', 'client', '-' . '%', false])
      ->asArray()
      ->all();

      return $this->render('z13_13', [
          'booking' => $booking,
      ]);
    }
    else {
        return $this->render('z13', [
            'booking' => $booking,
        ]);
    }
}

public function actionZ14(){
    $booking = new booking();
    if ($booking->load(Yii::$app->request->post()))
    {
      $kolvo = $booking->client1;
      $query = booking::find();
      $booking = $query
      ->select('idbooking,client,nomer_komanatii,dolg, data_zas,data_vis')
      ->from('booking')
      ->where(['=','client',$kolvo])
      ->andWhere(['NOT LIKE', 'client', '-' . '%', false])
      ->asArray()
      ->all();

      $count = booking::find([])
      ->select('count(client) cou')
      ->from('booking')
      ->where(['LIKE','client',$kolvo])
      ->andWhere(['NOT LIKE', 'client', '-' . '%', false])
      ->asArray()
      ->all();
      
      return $this->render('z14_14', [
        'count'=> $count,
          'booking' => $booking,
      ]);
    }
    else {
        return $this->render('z14', [
            'booking' => $booking,
        ]);
    }
}

public function actionZ15(){
    $booking = new booking();
    if ($booking->load(Yii::$app->request->post()))
    {
      $kolvo = $booking->n;
      $data1 = $booking->data1;
      $data2 = $booking->data2;
      $query = booking::find();
      $booking = $query
      ->select('idbooking,firm,client,data_zas,data_vis')
      ->from('booking')
      ->where(['=','nomer_komanatii',$kolvo])
      ->asArray()
      ->all();
      
      return $this->render('z15_15', [
          'booking' => $booking,
      ]);
    }
    else {
        return $this->render('z15', [
            'booking' => $booking,
        ]);
    }
}

public function actionZ16(){
    $this->view->title = 'z16';
      $query = booking::find();
      $booking = $query
      ->select('(count(firm)/max(idbooking)*100) cou')
      ->from('booking')
      ->where(['NOT LIKE', 'firm', '-' . '%', false])
      ->asArray()
      ->all();

        return $this->render('z16', [
            'booking' => $booking,
        ]);
    }
}