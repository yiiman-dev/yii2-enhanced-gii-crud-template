# yii2-enhanced-gii-crud-template
crud template for persian language
## instalation
##### Using Composer

You can use the composer package manager to install. Either run:

$ php composer.phar require amintado/yii2-enhanced-gii-crud-template "@dev"

##### or add:

"amintado/yii2-enhanced-gii-crud-template": "@dev"

to your composer.json file

## config
add this code to `@app/config/main-local.php` file:

`$config['modules']['gii'] = [
         'class' => 'yii\gii\Module',
         'allowedIPs' => ['127.0.0.1', '::1', '192.168.0.*', '192.168.178.20'],
         'generators' => [ //here
             'enhanced-gii-crud'=>[
                 'templates'=>[
                     'default' => '@vendor/mootensai/yii2-enhanced-gii/crud/default',
                     'nested' => '@vendor/mootensai/yii2-enhanced-gii/crud/nested',
                     'persian'=>'@vendor/amintado/yii2-enhanced-gii-crud-template/persian',
                     'material-dashboard-pro'=>'@vendor/amintado/yii2-enhanced-gii-crud-template/material-dashboard-pro',
                 ]
             ]
         ],
     ];`
     
## for use
1- open gii module in browser and go to 'I/O Generator (CRUD)' page
2- then in the form, change `Code Template` field to persian

## note 
for use material-kit theme, you must add material dashboard pro assets to your project: https://www.creative-tim.com/product/material-dashboard