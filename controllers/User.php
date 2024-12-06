<?php

namespace app\models;
use yii\web\IdentityInterface;
use yii;
use yii\web\Controller;


class UserController extends Controller
{
    /**
     * Displays the profile page.
     *
     * @return string
     */
    
    public function actionProfile()
    {
        // Get the currently logged-in user from the session
        $user = Yii::$app->user->identity;

        // Render the profile view
        return $this->render('profile', [
            'user' => $user,
        ]);
    }

    /**
     * Handles the update of the password.
     *
     * @return string|\yii\web\Response
     */
    public function actionUpdatePassword()
    {
        $model = new UpdatePasswordForm();

        // If the form is submitted and valid, update the password
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $user = Yii::$app->user->identity;

            // Update password (ensure you hash the password before saving)
            $user->password = md5($model->new_password);  // Use a proper password hashing function here
            $user->save();

            Yii::$app->session->setFlash('success', 'Password updated successfully!');
            return $this->redirect(['user/profile']);
        }

        // Render the update password view
        return $this->render('update-password', [
            'model' => $model,
        ]);
    }
}