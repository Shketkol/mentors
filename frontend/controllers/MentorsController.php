<?php

namespace frontend\controllers;

use common\models\User;
use yii\data\Pagination;
use yii\db\Query;

class MentorsController extends \yii\web\Controller
{
    public $layout = "default";
    public function actionIndex($username = '', $tehnologis='',$price='', $sort = '')
    {

        //SHOW MENTORS according to the parameters
        $model = new Query();
        $user_page = new User();
        if(isset($username)){
            $user_page = User::find()
                ->filterWhere(['username' => $username]);
        } elseif (isset($tehnologis)||isset($price)){
            $user_page = User::find()
                ->filterWhere(['role' => 'mentor'])
                ->andFilterWhere(['like', 'teh', $tehnologis]);
        } else {
            $user_page = $model->from('user')->where(['role'=>'mentor'])->orderBy('create_at');
        }
        $countQuery = clone $user_page;

        //SHOW PAGINATION
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $pages->setPageSize(3);
        $model = $user_page->offset($pages->offset)->limit($pages->limit)->all();

        //POPULAR MENTORS
        $sql = "select * from user WHERE role = 'mentor' limit 3";
        $popMentors = \Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('index', [
            'user'=>$model,
            'pages'=>$pages,
            'popMentors' =>$popMentors
        ]);
    }

    public function actionView($id){
        $model = new Query();
        $user =$model->from('user')->where(['id'=> $id])->one();
        $temp = array();
        $path_tehnlogis = explode('.', $user['teh']);
        foreach($path_tehnlogis as $value){
            $tehno = $model->select('type')->from('tehnologis')->where(['id'=> $value])->one();
            array_push($temp, $tehno);
        }
        array_push($user, $temp);
        return $this->render('view',[
            'user'=>$user
        ]);
    }

}
