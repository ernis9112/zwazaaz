<html>
<head>
    <style>
        ul {
            width: 800px;
            display: block;
            margin: 0 auto;
        }
        li {
            display: block;
            height: 20px;
            padding: 5px;
        }
        li:nth-child(2n) {
            background: #eee;
        }
        .pull-right {
            float: right;
        }
    </style>
</head>
<body>
<ul>
    <?php
    $files = glob('./*.html');
    echo "<li style='font-weight: bold'>File name<span class='pull-right'>Modified</span></li>";
    foreach ($files as &$f) {
        echo "<li><a href='".$f."'>";
        echo $f;
        echo "</a><span class='pull-right'>".date("Y m d H:i:s.", filemtime($f))."</span></li>";
    }
    ?>
</ul>
</body>
</html>
