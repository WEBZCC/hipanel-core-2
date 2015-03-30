<?php

namespace frontend\modules\server\grid;

use frontend\components\grid\DataColumn;
use frontend\components\widgets\Combo2;
use yii\helpers\Html;


class ServerColumn extends DataColumn
{
    public $attribute = 'server_id';

    public $nameAttribute = 'server';

    public $format = 'html';

    public function init () {
        parent::init();
        if (!$this->filterInputOptions['id']) {
            $this->filterInputOptions['id'] = $this->attribute;
        }
        if (!$this->filter) {
            $this->filter = Combo2::widget([
                'type'                => 'server',
                'attribute'           => $this->attribute,
                'model'               => $this->grid->filterModel,
                'formElementSelector' => 'td',
            ]);
        };
    }

    public function getDataCellValue ($model, $key, $index) {
        return Html::a($model->{$this->nameAttribute}, ['/server/server/view', 'id' => $model->{$this->attribute}]);
    }
}
