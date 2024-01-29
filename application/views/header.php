<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CodeIgniter Routes</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <style>
            .nav{
                background-color: #333;
                padding: 20px;
            }
            .horizontalNav{
                display: inline-block; /* Arrange list items horizontally */
                margin-right: 15px; /* Add some space between list items */
            }
            .horizontalNav a {
                text-decoration: none; /* Remove underlines from links */
                color: #fff; /* Text color for links */
                padding: 10px; /* Add padding to the links for better clickability */
                display: block; /* Make the entire area of the list item clickable */
            }
            .horizontalNav a:hover {
                color: blue; /* Change background color on hover */
            }
        </style>
    </head>
    <body>
        <section class="section">
            <div class="container">
                <div class="nav">
                    <li class="horizontalNav"> 
                        <a href="<?php echo base_url()?>">Home</a>
                    </li>
                    <li class="horizontalNav"> 
                        <a href="<?php echo base_url('welcome/about_us')?>">About Us</a>
                    </li>
                    <li class="horizontalNav"> 
                        <a href="<?php echo base_url('authors')?>">Authors</a>
                    </li>
                    <li class="horizontalNav"> 
                        <a href="<?php echo base_url('cities')?>">Cities</a>
                    </li>
                </div>
                <h1 class="title">CI Contacts v1</h1>
                <h2 class="subtitle">CodeIgniter contacts management app</h2>
                <div class="columns">
                    <div class="column is-one-quarter">
                        <aside class="menu">
                            <p class="menu-label">
                                General
                            </p>
                            <ul class="menu-list">
                                <li><a class="is-active" href="#">Dashboard</a></li>
                                <li><a href="<?=base_url('contacts')?>">Contacts</a></li>
                                <li><a href="<?=base_url('contacts/create')?>">New Contact</a></li>
                                <li><a href="<?=base_url('contacts/edit/1')?>">Edit Contacts</a></li>
                            </ul>
                            <p class="menu-label">
                                Settings
                            </p>
                            <ul class="menu-list">
                                <li><a href="#">SMS</a></li>
                                <li><a href="#">Email</a></li>
                            </ul>
                        </aside>
                    </div>