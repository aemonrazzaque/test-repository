<?php
    $_ = "        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.             ";
    $result = strlen($_);
    echo $result;
    echo "<pre>";
    $result = trim($_);
    echo $result;
    echo "<pre>";
    $result = ltrim($_);
    echo $result;
    echo "<pre>";
    $result = rtrim($_);
    echo $result;
    echo "<pre>";
    $result = str_replace("simply","     ",$_);
    echo $result;
    echo "<pre>";
    $result = substr($_, 10);
    echo $result;
    echo "<pre>";
    // it will give number of times you get this text
    $result = substr_count($_,'text');
    echo $result;
    echo "<pre>";
    $result = strpos($_,"text");
    echo $result;
    echo "<pre>";
    $result = strrev($_);
    echo $result;
    echo "<pre>";
    $result = strtolower($_);
    echo $result;
    echo "<pre>";
    $result = strtoupper($_);
    echo $result;
    echo "<pre>";
    $result = ucfirst($_);
    echo $result;
    echo "<pre>";
    $result = ucwords($_);
    echo $result;
    echo "<pre>";
    var_dump(explode(" ",$_));
    $result = explode(" ",$_);
    print_r($result);
    



?>