<?php
namespace frontend\widgets;

use common\models\User;
use common\models\LoginForm;
use yii\bootstrap\Widget;
use yii\db\Query;
use yii\helpers\Url;


class AuthSocialNetworkWidget extends Widget {
    private $client_id;
    private $client_secret;
    private $redirect_uri;
    private $url;
    public function init(){
    $this->client_id = '5499105'; // ID приложения
    $this->client_secret = 'czzKJcvHfhq0V8m0ltY8'; // Защищённый ключ
    $this->redirect_uri = 'http://mentors.loc/user/register'; // Адрес сайта
    $this->url= 'http://oauth.vk.com/authorize';
    }
    public $params = array();

    public function run(){
        $params = array(
        'client_id'     => $this->client_id,
        'redirect_uri'  => $this->redirect_uri,
        'response_type' => 'code'
    );
        $params1 = urldecode(http_build_query($params));
        if (isset($_GET['code'])) {
            $result = false;
            $params = array(
                'client_id' => $this->client_id,
                'client_secret' => $this->client_secret,
                'code' => $_GET['code'],
                'redirect_uri' => $this->redirect_uri
            );

            $token = json_decode(file_get_contents('https://oauth.vk.com/access_token' . '?' . urldecode(http_build_query($params))), true);

            if (isset($token['access_token'])) {
                $params = array(
                    'uids'         => $token['user_id'],
                    'fields'       => 'uid,first_name,last_name,screen_name,sex,bdate,photo_big',
                    'access_token' => $token['access_token']
                );

                $userInfo = json_decode(file_get_contents('https://api.vk.com/method/users.get' . '?' . urldecode(http_build_query($params))), true);
                if (isset($userInfo['response'][0]['uid'])) {
                    $userInfo = $userInfo['response'][0];
                    $result = true;
                }
            }
            $name = $userInfo['first_name'];
            $lastName = $userInfo['last_name'];
            $image = $userInfo['photo_big'];
            $model = new LoginForm();
            $result = (boolean)User::findByUser($name, $lastName);
            if ($result == false) {
                $sql = "insert into user
                set name = '{$name}',
                lastName = '{$lastName}',
                image = '{$image}'
                ";
                \Yii::$app->db->createCommand($sql)->execute();

                $model->loginNetwork($name, $lastName);
            }
            $model->loginNetwork($name, $lastName);
        }






        return $this->render('AuthSocialNetwork', ['url' => $this->url,
            'params' => $params1]);
    }
}