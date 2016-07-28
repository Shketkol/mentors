<?php

namespace frontend\controllers;

use common\models\User;
use yii\db\Query;

class PagesController extends \yii\web\Controller
{
    public  $layout = 'default';
    public function actionIndex()
    {
       $model =new Query();
        //latest mentor begin
        //$latest = $model->from('user')->where(['role'=>'mentor'])->limit(6)->all();
        $latest = \Yii::$app->db->createCommand("select * from `user` where `role` = 'mentor' group by `created_at` desc limit 6")->queryAll();
        $temp1 =array();
        for($i=0;$i<=count($latest);$i++) {
            if (isset($latest[$i]['teh'])) {

            $path_tehnlogis = explode('.', $latest[$i]['teh']);
            $temp = array();
            foreach ($path_tehnlogis as $teh_id) {
                $tehno = $model->from('tehnologis')->where(['id' => $teh_id])->one();
                array_push($temp, $tehno);
            }
            $latest[$i]['tehnologis'] = $temp;
            //var_dump($latest[$i]);die;
            array_push($temp1, $latest[$i]);
        }
        }
        //latest mentor end
        //echo "<pre>";
        //print_r($temp1);die;
        //echo "</pre>";

        return $this->render('index',[
            'latest'=>$temp1
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
