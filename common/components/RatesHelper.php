<?
namespace common\components;
use Yii;
use linslin\yii2\curl;
use common\models\Rates;
use yii\helpers\Json;

class RatesHelper {
    public static function updateRates()
    {
        $curl = new curl\Curl();

        $response = $curl->get('https://min-api.cryptocompare.com/data/price?fsym=USD&tsyms=BTC,ETH,LTC,DASH');

        $params = Json::decode($response);
        $model = new Rates();

        $model->usd = Yii::$app->keyStorage->get('usdExchangeRate');
        $model->btc = $params['BTC'];
        $model->eth = $params['ETH'];
        $model->ltc = $params['LTC'];
        $model->dash = $params['DASH'];

        $model->save();
    }

}
?>