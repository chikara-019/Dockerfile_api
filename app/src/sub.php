<?php

// YouTube Data API の API キー
require_once 'define.php';
// YouTube Data API を使用して動画情報を取得
$response = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?key=' . YOUTUBE_API_KEY1 . '&channelId=UCpj_nD9850tykDqIrjtIXdg&part=snippet&order=date&maxResults=1&type=video'), true);


// 最新の動画タイトルを出力
if ($response && isset($response['items'][0]['snippet'])) {
    $snippet = $response['items'][0]['snippet'];

    // タイトル
    echo 'タイトル: ' . $snippet['title'] . '<br>';

    // 動画の説明
    echo '説明: ' . $snippet['description'] . '<br>';

    // 動画の公開日時
    echo '公開日時: ' . $snippet['publishedAt'] . '<br>';

    // チャンネルのタイトル
    echo 'チャンネル: ' . $snippet['channelTitle'] . '<br><br>';



    // サムネイルの URL
    $thumbnails = $snippet['thumbnails'];
    echo 'デフォルトサムネイル: ' . $thumbnails['default']['url'] . '<br>';
    echo 'ハイサムネイル: ' . $thumbnails['high']['url'] . '<br>';
    // 他のサムネイルも同様に取得可能
}

/*
if ($response && isset($response['items'])) {
    foreach ($response['items'] as $item) {
        $snippet = $item['snippet'];
        // タイトル
        echo 'タイトル: ' . $snippet['title'] . '<br>';
        // 動画の説明
        echo '説明: ' . $snippet['description'] . '<br>';
        // 動画の公開日時
        echo '公開日時: ' . $snippet['publishedAt'] . '<br>';
        // チャンネルのタイトル
        echo 'チャンネル: ' . $snippet['channelTitle'] . '<br><br>';
    }
*/
?>