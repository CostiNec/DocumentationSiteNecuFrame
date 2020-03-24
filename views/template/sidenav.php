<?php
/**
 * @var $View View
 * @var $isDevice MobileDetect
 */
use Detection\MobileDetect;
?>

<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

<div class="page-wrapper chiller-theme <?=(!$isDevice->isMobile()) ? 'toggled' : ''?>">
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
        <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <div class="sidebar-brand">
                <a href="/">Custom MVC</a>
                <div id="close-sidebar">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="sidebar-header">
                <div class="user-pic">
                    <img class="img-responsive img-rounded" src="/assets/img/logo.png"
                         alt="User picture">
                </div>
            </div>
            <!-- sidebar-header  -->
            <div class="sidebar-menu">
                <ul>
                    <li class="header-menu">
                        <span>General</span>
                    </li>
                    <li class="sidebar">
                        <a href="/start">
                            <i class="fa fa-play"></i>
                            <span>Getting Started</span>
                        </a>
                    </li>
                    <li class="sidebar-dropdown">
                        <a class="cursor">
                            <i class="fa fa-book"></i>
                            <span>Documentation</span>
                            <span class="badge badge-pill badge-success">Alpha</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="/routes">Routes</a>
                                </li>
                                <li>
                                    <a href="/controllers">Controllers</a>
                                </li>
                                <li>
                                    <a href="/views">Views</a>
                                </li>
                                <li>
                                    <a href="/models">Models</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar">
                        <a class="cursor" href="/contact">
                            <i class="fas fa-id-card"></i>
                            <span>Contact US</span>
                        </a>
                    </li>
                    <li class="header-menu">
                        <span>Extra</span>
                    </li>
                    <li>
                        <a href="/options" class="cursor">
                            <i class="fas fa-cogs"></i>
                            <span>Options</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

