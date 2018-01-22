<?php

use yii\grid\GridView;

$this->title = Yii::t('frontend', 'Referral registrations')
?>



        <div class="box">
            <div class="box-inner">
                <div class="box-title">
                    <h2>
                        Referral registrations
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
                            'attribute'=>'user.username',
                            'header' => 'User Identity',
                            'contentOptions' =>['class' => 'min-width'],
                            'value'=>function($data) {
                                return $data->user->getPublicIdentity();
                            }

                        ],
                    ]
                ]);
                ?>
                </div>
            </div>
        </div>


