<?php

namespace App\Http\Controllers;

use App\Models\Creator;
use App\Services\CreatorSearchService;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function welcome()
    {
        $creator_count = Creator::creator_count();
        return view('welcome', compact('creator_count'));
    }

    public function privacy_policy()
    {
        return view('privacy_policy');
    }

    public function terms_of_service()
    {
        return view('terms_of_service');
    }

    public function search()
    {
        return view('search');
    }

    public function dashboard()
    {
        $searchable = Creator::searchable()->count();
        $indexStats = (new CreatorSearchService())->getStats();
        $vitalStats = DB::select("SELECT
            count(id) as 'Total',
            sum(case when confirmed_at is null then 1 else 0 end) as 'Not Confirmed',
            sum(case when last_processed_at is null then 1 else 0 end) as 'Not Processed',
            sum(case when name is null and channel != 'reddit' and valid = 1 then 1 else 0 end) as 'Valid Non-Reddit without Name',
            sum(case when ranking is null and channel != 'reddit' and valid = 1  then 1 else 0 end) as 'Valid Non-Reddit without Ranking'
            from creators
            ");
        return view('dashboard', [
            'searchable' => $searchable,
            'indexStats' => $indexStats,
            'vitalStats' => (array) $vitalStats[0],
        ]);
    }
}
