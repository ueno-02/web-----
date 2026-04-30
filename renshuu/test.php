            <video src="video/videoproject.mp4" autoplay muted loop playsinline></video>


<?php 
$Hello = 'Hello,World!';

function title($word) {
    echo '<h1 style=" color:red">' . $word . '</h1>';
}

title($Hello);

title("こんにちは");
?>

<ul>
    <li>ハンバーガー</li>
    <li>チーズバーガー</li>
    <li>フィレオフィッシュ</li>
</ul>

<?php

$burgur = [
    'ハンバーガー',
    'チーズバーガー',
    'フィレオフィッシュ'
];

function menu($items) {
    echo '<ul>';
    foreach($items as $item){
        echo '<li style="color:red">' . $item . '</li>';
    }
    echo '</ul>';
}

menu($burgur);

$drinks = [
    'コーラ',
    'オレンジジュース',
    'お茶',
    'シェイク',
    'ジンジャーエール'
];

menu($drinks);

?>