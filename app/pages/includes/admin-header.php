<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=APP_NAME?> - Admin</title>
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/styles.css?<?= time();?>">
</head>
<body>
<style>
    header a {
        color: purple;
    }
    .dropdown-list {
        background-color: grey;
    }
</style>
    <header style="background-color: #ecd10a; color: purple;">
        <div class="logo-holder">
            <a href="<?=ROOT?>"><img class="logo" src="<?=ROOT?>/assets/images/Picture1.png" alt=""></a>
        </div>
        <div class="header-div">
            <div class="main-title">ADMIN AREA
            <div class="socials">
                
            </div>
            </div>
            <div class="main-nav">
                <div class="nav-item"><a href="<?=ROOT?>/admin">Dashboard</a></div>
                <div class="nav-item"><a href="<?=ROOT?>/admin/users">Users</a></div>
                <div class="nav-item"><a href="<?=ROOT?>/admin/products">Products</a></div>
                <div class="nav-item"><a href="<?=ROOT?>/admin/events">Events</a></div>
                <div class="nav-item"><a href="<?=ROOT?>/admin/tales">Tasty Tales</a></div>
                <div class="nav-item"><a href="<?=ROOT?>/admin/aboutUs">About Us</a></div>
                <div class="nav-item dropdown"> <!-- this is drop down menu -->
                    <a href="#">Hi, <?=user('username')?></a> 
                    <div class="dropdown-list">
                        <div class="nav-item"><a href="<?=ROOT?>/profile">Profile</a></div>
                        <div class="nav-item"><a href="<?=ROOT?>">Website</a></div>
                        <div class="nav-item"><a href="<?=ROOT?>/logout">Logout</a></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

<!-- print any messages if they exist -->
<?php if(message()):?>

<div class="alert"><?=message('', true)?></div>

<?php endif;?>