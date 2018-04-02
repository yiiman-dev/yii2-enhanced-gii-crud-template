<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

echo "<?php\n";
?>

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */

$this->title = <?= $generator->generateString('Create ' . Inflector::camel2words(StringHelper::basename($generator->modelClass))) ?>;
$this->params['breadcrumbs'][] = ['label' => <?= ($generator->pluralize) ? $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) : $generator->generateString(Inflector::camel2words(StringHelper::basename($generator->modelClass))) ?>, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-create">
    <div class="card card-nav-tabs">
        <h4 class="card-header card-header-success color-white"> <?= '<?= Html::encode( $this->title ) ?>' ?></h4>
        <div class="card-body">
            <div class="col-md-12">
	            <?= "<?= " ?>$this->render('_descriptionCard', [
                'model' => $model,
                ]) ?>
                <div class="col-md-12">
                    <div class="card bg-dark text-white">
                        <h3 style="padding: 10px;color: #6a6d6d">لطفا فرم ذیل را پر کنید</h3>
                        <div class="card-body">
                            <div class="col-md-12">
				                <?= "<?= " ?>$this->render('_form', [
                                'model' => $model,
                                ]) ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
