<?php
static $jokes_list = null;

function get_jokes() {
    global $jokes_list;

    if ($jokes_list !== null)
        return $jokes_list;

    $url = "http://xkcd.com/rss.xml";
    $context  = stream_context_create(array('http' => array('header' => 'Accept: application/xml')));
    $xml = file_get_contents($url, false, $context);
    $jokes_list = json_decode(json_encode(simplexml_load_string($xml)));
    return $jokes_list;
}

function show_jokes() {
    $jokes = get_jokes();

    foreach ($jokes->channel->item as $joke) {
        echo render_joke($joke);
    }
}

function render_joke(stdClass $joke) {
    // Prevent undefined fields notices
    $joke = array_merge([
        'title'         => null,
        'description'   => null,
        'link'          => null,
        'pubDate'       => null,
    ], (array)$joke);

    $joke = (object)$joke;

$html = <<<HTML
<div class="col-xs-12 col-sm-6">
    <div class="panel panel-default">
        <div class="panel-thumbnail">
            {$joke->description}
        </div>
        <div class="panel-body">
            <p class="lead">{$joke->title}</p>
            <p><a href="{$joke->link}">{$joke->link}</a></p>
            <p>{$joke->pubDate}</p>
        </div>
    </div>
</div>
HTML;

    return $html;
}