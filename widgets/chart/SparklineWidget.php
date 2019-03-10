<?php
namespace bengbeng\admin\widgets\chart;

use bengbeng\admin\components\assets\plugins\SparklineAsset;
use yii\base\Widget;
use yii\helpers\Json;

class SparklineWidget extends Widget{

    public $clientOptions = [];
    public $sarkData = [];

    private $defaultClientOptions = [
        'type' => 'line',
        'width' => '100%',
        'height' => '50',
        'lineColor' => '#13dafe',
        'fillColor' => '#13dafe',
        'minSpotColor' => '#13dafe',
        'maxSpotColor' => '#13dafe',
        'highlightLineColor' => 'rgba(0, 0, 0, 0.2)',
        'highlightSpotColor' => '#13dafe',
    ];

    private $clientID;

    public function init()
    {
        $this->clientOptions = array_merge($this->defaultClientOptions, $this->clientOptions);
        $this->clientID = 'spark-'.time();

        parent::init(); // TODO: Change the autogenerated stub
    }


    public function run()
    {
        $this->registerAssets();

        echo '<div id="'.$this->clientID.'" class="sparkchart"></div>';

        $this->getView()->registerJs('$("#'.$this->clientID.'").sparkline('.Json::encode($this->sarkData).', {'.$this->getExtendsParams().'});'
        );
    }

    private function registerAssets(){
        $view = $this->getView();

        SparklineAsset::register($view);
    }

    private function getExtendsParams()
    {
        $result = '';
        foreach ($this->clientOptions as $val => $key) {
            $result .= (empty($result) ? '' : ',') . $val . ': ' . $key;
        }

        return $result;
    }
}
