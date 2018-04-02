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

$urlParams = $generator->generateUrlParams();
$nameAttribute = $generator->getNameAttribute();
$tableSchema = $generator->getTableSchema();
$baseModelClass = StringHelper::basename($generator->modelClass);
$fk = $generator->generateFK($tableSchema);
echo "<?php\n";
?>
use yii\helpers\Html;
<?= '?>' ?>
<!-- Modal -->
<div class="modal fade" id="help" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-center" id="helpModalLabel">توضیحاتی در مورد این بخش</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?= "<?= " ?>$this->render('_helpText') ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">فهمیدم</button>
				<?= "<?= " ?>Html::a(<?= $generator->generateString('Create Now' ) ?>, ['create'], ['class' => 'btn btn-success']) ?>
			</div>
		</div>
	</div>
</div>
