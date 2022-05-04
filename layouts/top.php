<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>phpblog <?=$_SERVER['REQUEST_URI'] ?? '' ?></title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans+KR:400,500&display=swap&subset=korean">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <div id="app">
        <main id="main" role="main">
            <nav id="nav" role="navigation" class="uk-navbar-container uk-navbar-transparent uk-padding uk-padding-remove-vertical uk-margin-bottom" uk-navbar>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/user/register.php">Register</a></li>
                        <?php if(array_key_exists('user',$_SESSION)) : ?>
                            <li><a href="/user/update.php">Update</a></li>
                            <li><a href="/user/write.php">Write</a></li>
                            <li><a href="/user/logout.php">Logout</a></li>
                        <?php else : ?>
                            <li><a href="/user/login.php">Login</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>