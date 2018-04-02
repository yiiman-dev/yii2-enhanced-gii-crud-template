<?php
/**
 * Created by PhpStorm.
 * User: amintado
 * Date: 4/1/2018
 * Time: 12:06 PM
 */

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator \mootensai\enhancedgii\crud\Generator */

$urlParams      = $generator->generateUrlParams();
$nameAttribute  = $generator->getNameAttribute();
$tableSchema    = $generator->getTableSchema();
$baseModelClass = StringHelper::basename( $generator->modelClass );
$fk             = $generator->generateFK( $tableSchema );
echo "<?php\n";
?>
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model <?= ltrim( $generator->searchModelClass, '\\' ) ?> */
/* @var $form yii\widgets\ActiveForm */

<?= '?>' ?>
<!-- Modal -->
<div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
		<?= "<?php " ?>$form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        ]); ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="searchModalLabel">جست و جوی پیشرفته</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <div class="form-<?= Inflector::camel2id( StringHelper::basename( $generator->modelClass ) ) ?>-search">


					<?php
					$count = 0;
					foreach ( $generator->getColumnNames() as $attribute ) {
						if ( ! in_array( $attribute, $generator->skippedColumns ) ) {
							if ( ++ $count < 6 ) {
								echo "    <?= " . $generator->generateActiveField( $attribute, $fk ) . " ?>\n\n";
							} else {
								echo "    <?php /* echo " . $generator->generateActiveField( $attribute, $fk ) . " */ ?>\n\n";
							}
						}
					}
					?>


                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">بی خیال</button>
				<?= "<?= " ?>Html::resetButton(<?= $generator->generateString( 'Reset' ) ?>, ['class' => 'btn
                btn-default']) ?>
				<?= "<?= " ?>Html::submitButton(<?= $generator->generateString( 'Search' ) ?>, ['class' => 'btn
                btn-primary']) ?>
            </div>
        </div>
		<?= "<?php " ?>ActiveForm::end(); ?>
    </div>

</div>
