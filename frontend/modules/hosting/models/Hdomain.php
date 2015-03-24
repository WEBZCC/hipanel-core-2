<?php
namespace frontend\modules\hosting\models;

use Yii;

class Hdomain extends \frontend\components\Model
{

    use \frontend\components\ModelTrait;

    /** @inheritdoc */
    public function rules () {
        return [
            [['id'],                                            'safe'],
            [['domain'],                                        'safe'],
            [['remoteid','epp_client_id'],                      'safe'],
            [['seller_id','client_id'],                         'safe'],
            [['seller','client'],                               'safe'],
            [['state','block','lastop'],                        'safe'],
            [['state_label'],                                   'safe'],
            [['registrant','admin','tech','billing'],           'safe'],
            [['whois_protected','is_secured','autorenewal'],    'safe'],
            [['is_holded','is_freezed','is_premium'],           'safe'],
            [['created_date','updated_date'],                   'safe'],
            [['transfer_date','expiration_date'],               'safe'],
            [['expires','since','operated'],                    'safe'],
        ];
    }

    /** @inheritdoc */
    public function attributeLabels () {
        return [
            'id'                    => Yii::t('app', 'ID'),
            'epp_client_id'         => Yii::t('app', 'EPP client ID'),
            'remoteid'              => Yii::t('app', 'Remote ID'),
            'state'                 => Yii::t('app', 'Status'),
            'state_label'           => Yii::t('app', 'Status'),
            'statuses'              => Yii::t('app', 'Statuses'),
            'errors'                => Yii::t('app', 'Errors'),
            'name'                  => Yii::t('app', 'Name'),
            'zone_id'               => Yii::t('app', 'Zone ID'),
            'zone'                  => Yii::t('app', 'Zone'),
            'domain'                => Yii::t('app', 'Domain Name'),
            'note'                  => Yii::t('app', 'Notes'),
            'nameservers'           => Yii::t('app', 'Name Servers'),
            'created_date'          => Yii::t('app', 'Registered'),
            'updated_date'          => Yii::t('app', 'Update Time'),
            'transfer_date'         => Yii::t('app', 'Transfered'),
            'expiration_date'       => Yii::t('app', 'System Expiration Time'),
            'expires'               => Yii::t('app', 'Payed Till'),
            'since'                 => Yii::t('app', 'Since Time'),
            'lastop'                => Yii::t('app', 'Last Operation'),
            'operated'              => Yii::t('app', 'Last Operation Time'),
            'whois_protected'       => Yii::t('app', 'WHOIS'),
            'is_secured'            => Yii::t('app', 'Lock'),
            'is_holded'             => Yii::t('app', ' label'),
            'autorenewal'           => Yii::t('app', 'Autorenewal'),
            'is_freezed'            => Yii::t('app', ' label'),
            'client_id'             => Yii::t('app', 'Client ID'),
            'client'                => Yii::t('app', 'Client'),
            'client_name'           => Yii::t('app', 'Client Name'),
            'seller_id'             => Yii::t('app', 'Seller ID'),
            'seller'                => Yii::t('app', 'Seller'),
            'seller_name'           => Yii::t('app', 'Seller Name'),
            'foa_sent_to'           => Yii::t('app', ' label'),
            'is_premium'            => Yii::t('app', ' label'),
            'prem_expires'          => Yii::t('app', ' label'),
            'prem_daysleft'         => Yii::t('app', ' label'),
            'premium_autorenewal'   => Yii::t('app', ' label'),
            'url_fwval'             => Yii::t('app', ' label'),
            'mailval'               => Yii::t('app', ' label'),
            'parkval'               => Yii::t('app', ' label'),
            'daysleft'              => Yii::t('app', ' label'),
            'is_expired'            => Yii::t('app', ' label'),
            'expires_soon'          => Yii::t('app', ' label'),
        ];
    }
}
