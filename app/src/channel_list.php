<h1>動画まとめ</h1>

<?php

require_once "define.php";

try{
    $pdo = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME, USERNAME, PASSWORD);
    $sql = "SELECT channel_id FROM channel_id";
    $stmt = $pdo->query($sql);
    // チャンネルリスト
    $channel_list = $stmt->fetchAll(PDO::FETCH_NUM);

    // 全動画を格納する配列
    $all_videos = [];

    // 各チャンネルから動画を取得して統合
    foreach ($channel_list as $channel) {
        $response = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?key=' . YOUTUBE_API_KEY6 . '&channelId=' . $channel[0] . '&part=snippet&order=date&maxResults=1&type=video'), true);
            
        if ($response && isset($response['items'])) {
               foreach ($response['items'] as $item) {
                $all_videos[] = $item;
            }
        }
    }
}catch(PDOException $e){
    echo "接続に失敗しました" . $e->getMessage();
}

usort($all_videos, function($a, $b) {
    return strtotime($b['snippet']['publishedAt']) - strtotime($a['snippet']['publishedAt']);
});

// 動画を表示
foreach ($all_videos as $video) {

    echo '<a href="https://www.youtube.com/watch?v=' . $video['id']['videoId'] . '">' . $video['snippet']['title'] . '</a><br>';
    $samune_url = $video['snippet']['thumbnails']['medium']['url'];
    echo '<img src="' . $samune_url . '" alt="サムネ画像"><br>';
    echo 'チャンネル：' . $video['snippet']['channelTitle'] . '<br>';
    echo '公開日時：' . date('Y-m-d H:i:s', strtotime($video['snippet']['publishedAt'])) . '<br>';
    echo '<hr>';
}


?>
