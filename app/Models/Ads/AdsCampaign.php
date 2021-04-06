<?php

namespace App\Models\Ads;

use App\Models\Ads\AdsGeo;
use App\Models\Ads\AdsSet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdsCampaign extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function adsSets()
    {
        return $this->hasMany(AdsSet::class, 'ads_campaign_id');
    }

    public function adsGeos()
    {
        return $this->belongsToMany(AdsGeo::class, 'ads_campaign_geo', 'ads_campaign_id', 'ads_geo_id');
    }
}