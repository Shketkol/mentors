<?php

namespace frontend\controllers;

use common\models\LoginForm;
use common\models\User;
use frontend\models\SignupForm;
use yii\db\Query;

class UserController extends \yii\web\Controller
{
    public $layout = 'default';
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRegister(){
        $model = new SignupForm();

        if ($model->load(\Yii::$app->request->post())&&$model->validate()) {
            if ($user = $model->signup()) {
                if (\Yii::$app->getUser()->login($user)) {
                    $model->getImage(\Yii::$app->user->id);
                    return $this->goHome();
                }
            }
        }
        if(\Yii::$app->user->id){
            return $this->goHome();
        } else {
            return $this->render('register', [
                'model' => $model,]);
        }


    }

    public function actionLogin(){
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(\Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        \Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * @return string
     */
    public function actionProfile(){
        $model = new Query();
        $id = \Yii::$app->user->id;
        $user =$model->from('user')->where(['id'=> $id])->one();
        $temp = array();
        $path_tehnlogis = explode('.', $user['teh']);
        foreach($path_tehnlogis as $value){
            $tehno = $model->select('type')->from('tehnologis')->where(['id'=> $value])->one();
            array_push($temp, $tehno);
        }
        array_push($user, $temp);

        //echo "<pre>";
        //print_r($user);die;
        //echo "</pre>";
        return $this->render('profile',[
        'user' => $user
        ]);
    }

    public function actionEdit(){
        $model = new Query();
        $id = \Yii::$app->user->id;
        $user =$model->from('user')->where(['id'=> $id])->one();
        $temp = array();
        $path_tehnlogis = explode('.', $user['teh']);
        foreach($path_tehnlogis as $value){
            $tehno = $model->from('tehnologis')->where(['id'=> $value])->one();
            array_push($temp, $tehno);
        }
        array_push($user, $temp);
        $sql ="select * from tehnologis";
        $tehnologis = \Yii::$app->db->createCommand($sql)->queryAll();
        //echo "<pre>";
        //print_r($tehnologis);die;
        //echo "</pre>";
        if($_POST){
            print_r($_POST);die;
        }
        return $this->render('edit',[
            'user'=>$user,
            'tehnologis'=>$tehnologis
        ]);
    }
}
