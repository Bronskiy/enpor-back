<?php

use yii\grid\GridView;

$this->title = Yii::t('frontend', 'Referral link clicks')
?>



        <div class="box">
            <div class="box-inner">
                <div class="box-title">
                    <h2>
                        Referral link clicks
                    </h2>
                </div>
                <div class="table-wrapper">
                <?
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'layout'=>"{items}\n{summary}\n{pager}",
                    'tableOptions' => [
                        'class' => 'table'
                    ],
                    'pager' => [
                        'linkOptions' => ['class' => 'page-link'],
                        'pageCssClass' => 'page-item',
                        'firstPageCssClass' => 'page-item',
                        'lastPageCssClass' => 'page-item',
                        'nextPageCssClass' => 'page-item',
                        'prevPageCssClass' => 'page-item',
                        'disabledListItemSubTagOptions' => ['class' => 'page-link'],
                    ],
                    'columns' => [
                        [
                                'class' => 'yii\grid\SerialColumn',
                                'contentOptions' =>['class' => 'min-width']
                        ],
                        [
                            'attribute'=>'created_at',
                            'header' => 'Date',
                            'format' => 'datetime',
                            'contentOptions' =>['class' => 'min-width']
                        ],
                        [
                            'attribute'=>'ip',
                            'header' => 'IP',
                            'contentOptions' =>['class' => 'min-width'],
                            'value'=>function($data){
                                return long2ip($data->ip);
                            }
                        ],
                        [
                            'attribute'=>'ip',
                            'header' => 'Country',
                            'contentOptions' =>['class' => 'min-width'],
                            'value'=>function($data){
                                $geoip = new \lysenkobv\GeoIP\GeoIP();
                                $ip = $geoip->ip(long2ip($data->ip));
                                return $ip->country;
                            }
                        ],
                    ]
                ]);
                ?>
                </div>
            </div>
        </div>


