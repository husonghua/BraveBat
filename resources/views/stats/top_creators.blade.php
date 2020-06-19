@extends('layouts.app')

@section('title', 'Top Creators by Channels')
@section('description', 'Top Creators by Channels: Website, YouTube, GitHub, Twitter, Twitch, and Vimeo')

@section('content')
<div class='container px-4 py-4 mx-auto sm:px-6 md:px-8'>
    <div class="flex flex-wrap">
        <div class="w-full lg:w-1/2">
            <h1 class="pt-4 pb-1 text-2xl font-semibold">
                Top YouTube Creators
            </h1>
            <p class="pb-4 pl-1 text-sm text-gray-700">Subscriber Count: More Than 1M</p>
            <div class='mb-3 mr-4'>
                @include('charts.line', ['id' => 'top_creators/youtube', 'brand_color' => 'youtube', 'unit' =>'day'])
            </div>
        </div>

        <div class="w-full lg:w-1/2">
            <h1 class="pt-4 pb-1 text-2xl font-semibold">
                Top Website Creators
            </h1>
            <p class="pb-4 pl-1 text-sm text-gray-700">Alexa Ranking: Better Than 1K</p>
            <div class='mb-3 mr-4'>
                @include('charts.line', ['id' => 'top_creators/website', 'brand_color' => 'website', 'unit' =>'day'])
            </div>
        </div>

        <div class="w-full lg:w-1/2">
            <h1 class="pt-4 pb-1 text-2xl font-semibold">
                Top Twitch Creators
            </h1>
            <p class="pb-4 pl-1 text-sm text-gray-700">Follower Count: More Than 100K</p>
            <div class='mb-3 mr-4'>
                @include('charts.line', ['id' => 'top_creators/twitch', 'brand_color' => 'twitch', 'unit' =>'day'])
            </div>
        </div>

        <div class="w-full lg:w-1/2">
            <h1 class="pt-4 pb-1 text-2xl font-semibold">
                Top Twitter Creators
            </h1>
            <p class="pb-4 pl-1 text-sm text-gray-700">Follower Count: More Than 1M</p>
            <div class='mb-3 mr-4'>
                @include('charts.line', ['id' => 'top_creators/twitter', 'brand_color' => 'twitter', 'unit' =>'day'])
            </div>
        </div>

        <div class="w-full lg:w-1/2">
            <h1 class="pt-4 pb-1 text-2xl font-semibold">
                Top Vimeo Creators
            </h1>
            <p class="pb-4 pl-1 text-sm text-gray-700">Follower Count: More Than 1K</p>
            <div class='mb-3 mr-4'>

                @include('charts.line', ['id' => 'top_creators/vimeo', 'brand_color' => 'vimeo', 'unit' =>'day'])
            </div>
        </div>

        <div class="w-full lg:w-1/2">
            <h1 class="pt-4 pb-1 text-2xl font-semibold">
                Top Github Creators
            </h1>
            <p class="pb-4 pl-1 text-sm text-gray-700">Follower Count: More Than 1K</p>
            <div class='mb-3 mr-4'>

                @include('charts.line', ['id' => 'top_creators/github', 'brand_color' => 'github', 'unit' =>'day'])
            </div>
        </div>


    </div>
</div>
@endsection
