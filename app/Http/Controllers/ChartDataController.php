<?php

namespace App\Http\Controllers;

use App\Repositories\ChartDataRepository;
use Illuminate\Http\Request;

class ChartDataController extends Controller
{
    private $chartDataRepository;

    public function __construct(ChartDataRepository $chartDataRepository)
    {
        $this->chartDataRepository = $chartDataRepository;
    }

    public function dau()
    {
        return cache()->remember('dau', 86400, function () {
            return $this->chartDataRepository->dau();
        });
    }

    public function mau()
    {
        return cache()->remember('mau', 86400, function () {
            return $this->chartDataRepository->mau();
        });
    }

    public function dau_add()
    {
        return cache()->remember('dau_add', 86400, function () {
            return $this->chartDataRepository->dau_add();
        });
    }

    public function mau_add()
    {
        return cache()->remember('mau_add', 86400, function () {
            return $this->chartDataRepository->mau_add();
        });
    }

    public function dau_growth()
    {
        return cache()->remember('dau_growth', 86400, function () {
            return $this->chartDataRepository->dau_growth();
        });
    }

    public function mau_growth()
    {
        return cache()->remember('mau_growth', 86400, function () {
            return $this->chartDataRepository->mau_growth();
        });
    }

    public function bat_purchases()
    {
        return cache()->remember('bat_purchases', 86400, function () {
            return $this->chartDataRepository->bat_purchases();
        });
    }

    public function bat_purchases_in_dollars()
    {
        return cache()->remember('bat_purchases_in_dollars', 86400, function () {
            return $this->chartDataRepository->bat_purchase_in_dollars();
        });
    }

    public function ad_campaign_supported_countries()
    {
        return cache()->remember('ad_campaign_supported_countries', 86400, function () {
            return $this->chartDataRepository->ad_campaign_supported_countries();
        });
    }

    public function creator_stats()
    {
        return cache()->remember('creator_stats', 86400, function () {
            return $this->chartDataRepository->creator_stats();
        });
    }

    public function active_ad_campaigns(Request $request)
    {
        $country = $request->country;
        return cache()->remember('active_ad_campaigns_' . $country, 86400, function () use ($country) {
            return $this->chartDataRepository->active_ad_campaigns($country);
        });
    }

    public function creator_daily_total_stats($channel = null)
    {
        return cache()->remember('creator_daily_total_stats_' . $channel, 86400, function () use ($channel) {
            return $this->chartDataRepository->creator_daily_total_stats($channel);
        });
    }

    public function creator_daily_addition_stats($channel = null)
    {
        return cache()->remember('creator_daily_addition_stats_' . $channel, 86400, function () use ($channel) {
            return $this->chartDataRepository->creator_daily_addition_stats($channel);
        });
    }

    public function top_creators($channel)
    {
        return cache()->remember('top_creators_' . $channel, 86400, function () use ($channel) {
            return $this->chartDataRepository->top_creators($channel);
        });
    }

    public function creator_validation($channel)
    {
        return cache()->remember('creator_validation_' . $channel, 86400, function () use ($channel) {
            return $this->chartDataRepository->creator_validation($channel);
        });
    }

    public function communities($site, $community)
    {
        return cache()->remember('communities_' . $site . $community, 86400, function () use ($site, $community) {
            return $this->chartDataRepository->communities($site, $community);
        });
    }
}
