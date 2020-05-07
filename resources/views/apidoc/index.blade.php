<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

    <link rel="stylesheet" href="{{ asset('/docs/css/style.css') }}" />
    <script src="{{ asset('/docs/js/all.js') }}"></script>


          <script>
        $(function() {
            setupLanguages(["bash","javascript","php","python"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="/docs/images/navbar.png" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="/docs/images/logo.png" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="bash">bash</a>
                                  <a href="#" data-language-name="javascript">javascript</a>
                                  <a href="#" data-language-name="php">php</a>
                                  <a href="#" data-language-name="python">python</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                                  <li><a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Info</h1>
<p>Welcome to the generated API reference.
<a href="{{ route("apidoc.json") }}">Get Postman Collection</a></p>
<!-- END_INFO -->
<h1>v1</h1>
<!-- START_aa2d7691006b34558d15f286a5f83862 -->
<h2>GitHub</h2>
<p>Check if a GitHub account is a verified Brave Browser Creator. When it is confirmed, the endpoint returns the Github
link, use name, display name, description, the number of followers and the number of repos.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://bravebat.test/api/v1/github" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {your-token}" \
    -d '{"github_id":"55092446"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://bravebat.test/api/v1/github"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {your-token}",
};

let body = {
    "github_id": "55092446"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://bravebat.test/api/v1/github',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {your-token}',
        ],
        'json' =&gt; [
            'github_id' =&gt; '55092446',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://bravebat.test/api/v1/github'
payload = {
    "github_id": "55092446"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer {your-token}'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "data": {
        "link": "https:\/\/github.com\/husonghua",
        "name": "Some name",
        "display_name": "Some display name",
        "description": "Some description",
        "followers": 1000,
        "repos": 10
    }
}</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Missing required field"
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Not found"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/github</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>github_id</code></td>
<td>string</td>
<td>required</td>
<td>The GitHub ID (example: &quot;55092446&quot;). Notice this is not Github username that you might be familiar with.</td>
</tr>
</tbody>
</table>
<!-- END_aa2d7691006b34558d15f286a5f83862 -->
<!-- START_123cf704e3da78df2154667bcf7671fb -->
<h2>Reddit</h2>
<p>Check if a Reddit account is a verified Brave Browser Creator. When it is confirmed, the endpoint returns the
confirmation. No additional data points are returned currently.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://bravebat.test/api/v1/reddit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {your-token}" \
    -d '{"reddit_id":"2lsiek42"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://bravebat.test/api/v1/reddit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {your-token}",
};

let body = {
    "reddit_id": "2lsiek42"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://bravebat.test/api/v1/reddit',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {your-token}',
        ],
        'json' =&gt; [
            'reddit_id' =&gt; '2lsiek42',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://bravebat.test/api/v1/reddit'
payload = {
    "reddit_id": "2lsiek42"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer {your-token}'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true
}</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Missing required field"
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Not found"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/reddit</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>reddit_id</code></td>
<td>string</td>
<td>required</td>
<td>The Reddit ID (example: &quot;2lsiek42&quot;). Notice this is not Reddit username that you might be familiar with.</td>
</tr>
</tbody>
</table>
<!-- END_123cf704e3da78df2154667bcf7671fb -->
<!-- START_b6c5e6fe85836c0502e9fe6470d1a756 -->
<h2>Twitch</h2>
<p>Check if a Twitch channel is a verified Brave Browser Creator. When it is confirmed, the endpoint returns the Twitch
link, name, display name, description, the number of followers and the number of views.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://bravebat.test/api/v1/twitch" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {your-token}" \
    -d '{"twitch_id":"onboard001"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://bravebat.test/api/v1/twitch"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {your-token}",
};

let body = {
    "twitch_id": "onboard001"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://bravebat.test/api/v1/twitch',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {your-token}',
        ],
        'json' =&gt; [
            'twitch_id' =&gt; 'onboard001',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://bravebat.test/api/v1/twitch'
payload = {
    "twitch_id": "onboard001"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer {your-token}'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "data": {
        "link": "https:\/\/www.twitch.tv\/onboard001",
        "name": "Some name",
        "display_name": "Some display name",
        "description": "Some description",
        "followers": 1000,
        "views": 1000
    }
}</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Missing required field"
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Not found"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/twitch</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>twitch_id</code></td>
<td>string</td>
<td>required</td>
<td>The Twitch ID (example: &quot;onboard001&quot;)</td>
</tr>
</tbody>
</table>
<!-- END_b6c5e6fe85836c0502e9fe6470d1a756 -->
<!-- START_2e028dc962dcba4b1098c2a606262c08 -->
<h2>Twitter</h2>
<p>Check if a Twitter account is a verified Brave Browser Creator. When it is confirmed, the endpoint returns the Twitter
link, handle, display name, description and the number of followers.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://bravebat.test/api/v1/twitter" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {your-token}" \
    -d '{"twitter_id":"3488129179"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://bravebat.test/api/v1/twitter"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {your-token}",
};

let body = {
    "twitter_id": "3488129179"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://bravebat.test/api/v1/twitter',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {your-token}',
        ],
        'json' =&gt; [
            'twitter_id' =&gt; '3488129179',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://bravebat.test/api/v1/twitter'
payload = {
    "twitter_id": "3488129179"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer {your-token}'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "data": {
        "link": "https:\/\/twitter.com\/bravebatinfo",
        "handle": "BraveBatInfo",
        "display_name": "BraveBatInfo",
        "description": "Some description: http:\/\/bravebat.info",
        "followers": 1000
    }
}</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Missing required field"
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Not found"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/twitter</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>twitter_id</code></td>
<td>string</td>
<td>required</td>
<td>The Twitter ID (example: &quot;3488129179&quot;). Notice this is not Twitter handle that you might be familiar with.</td>
</tr>
</tbody>
</table>
<!-- END_2e028dc962dcba4b1098c2a606262c08 -->
<!-- START_96d46fceead83342585edaee1eace471 -->
<h2>vimeo</h2>
<p>Check if a Vimeo channel is a verified Brave Browser Creator. When it is confirmed, the endpoint returns the Vimeo
link, channel name, channel description, the number of channel followers and the number of videos.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://bravebat.test/api/v1/vimeo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {your-token}" \
    -d '{"vimeo_id":"105082085"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://bravebat.test/api/v1/vimeo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {your-token}",
};

let body = {
    "vimeo_id": "105082085"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://bravebat.test/api/v1/vimeo',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {your-token}',
        ],
        'json' =&gt; [
            'vimeo_id' =&gt; '105082085',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://bravebat.test/api/v1/vimeo'
payload = {
    "vimeo_id": "105082085"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer {your-token}'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "data": {
        "link": "https:\/\/vimeo.com\/user105082085",
        "name": "Some name",
        "display name": "Some display name",
        "description": "Some description",
        "followers": 1000,
        "videos": 10
    }
}</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Missing required field"
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Not found"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/vimeo</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>vimeo_id</code></td>
<td>string</td>
<td>required</td>
<td>The Vimeo ID (example: &quot;105082085&quot;). Notice this is not Vimeo username that you might be familiar with.</td>
</tr>
</tbody>
</table>
<!-- END_96d46fceead83342585edaee1eace471 -->
<!-- START_d8afcf81b557268db12b389598122c72 -->
<h2>Website</h2>
<p>Check if a website is a verified Brave Browser Creator. When it is confirmed, the endpoint returns the URL link,
alexa ranking and screenshot.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://bravebat.test/api/v1/website" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {your-token}" \
    -d '{"url":"wikipedia.org"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://bravebat.test/api/v1/website"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {your-token}",
};

let body = {
    "url": "wikipedia.org"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://bravebat.test/api/v1/website',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {your-token}',
        ],
        'json' =&gt; [
            'url' =&gt; 'wikipedia.org',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://bravebat.test/api/v1/website'
payload = {
    "url": "wikipedia.org"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer {your-token}'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "data": {
        "link": "https:\/\/wikipedia.org",
        "alexa_ranking": 10,
        "screenshot": "https:\/\/bravebat-prod.s3.us-west-2.amazonaws.com\/website_screenshots\/wikipedia_org.png"
    }
}</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Missing required field"
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Not found"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/website</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>url</code></td>
<td>string</td>
<td>required</td>
<td>The URL of the website.</td>
</tr>
</tbody>
</table>
<!-- END_d8afcf81b557268db12b389598122c72 -->
<!-- START_140d2e8c335ffa622d02919fc4b7a15c -->
<h2>YouTube</h2>
<p>Check if a YouTube channel is a verified Brave Browser Creator. When it is confirmed, the endpoint returns the YouTube
channel link, channel name, channel description and the number of channel subscribers.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://bravebat.test/api/v1/youtube" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {your-token}" \
    -d '{"youtube_id":"UC2F_7pXTR8LNg3llt55ZMCQ"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://bravebat.test/api/v1/youtube"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {your-token}",
};

let body = {
    "youtube_id": "UC2F_7pXTR8LNg3llt55ZMCQ"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://bravebat.test/api/v1/youtube',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {your-token}',
        ],
        'json' =&gt; [
            'youtube_id' =&gt; 'UC2F_7pXTR8LNg3llt55ZMCQ',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://bravebat.test/api/v1/youtube'
payload = {
    "youtube_id": "UC2F_7pXTR8LNg3llt55ZMCQ"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'Authorization': 'Bearer {your-token}'
}
response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "success": true,
    "data": {
        "link": "https:\/\/www.youtube.com\/channel\/UCr_USjgn4PQhVpqOT6RcAtQ",
        "name": "Some name",
        "description": "Some description",
        "subscribers": 1000
    }
}</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Missing required field"
}</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "success": false,
    "message": "Not found"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/youtube</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>youtube_id</code></td>
<td>string</td>
<td>required</td>
<td>The YouTube ID (example: &quot;UCr_USjgn4PQhVpqOT6RcAtQ&quot;)</td>
</tr>
</tbody>
</table>
<!-- END_140d2e8c335ffa622d02919fc4b7a15c -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                                    <a href="#" data-language-name="php">php</a>
                                    <a href="#" data-language-name="python">python</a>
                              </div>
                </div>
    </div>
  </body>
</html>