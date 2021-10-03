<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

?>
<!doctype html>
<html lang="en" dir="rtl">

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>

    <!-- Title -->
    <title>PROJECT COVRISK</title>
    <link rel="stylesheet" href="/assets/fonts/fonts/font-awesome.min.css">

    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Dashboard Css -->
    <link href="/assets/css-rtl/style.css" rel="stylesheet" />
    <link href="/assets/css-rtl/style-dark.css" rel="stylesheet" />
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#623AA2" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="green">
    <meta name="apple-mobile-web-app-title" content="COVRISK">

    <!--  Rating css-->
    <link rel="stylesheet" href="/assets/plugins/rating/css/ratings.css">
    <link rel="stylesheet" href="/assets/plugins/rating/css/rating-themes.css">

    <!-- c3.js Charts Plugin -->
    <link href="/assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

    <!-- select2 Plugin -->
    <link href="/assets/plugins/select2/select2.min-dark.css" rel="stylesheet" />

    <!-- forn-wizard css-->
    <link href="/assets/plugins/forn-wizard/css/material-bootstrap-wizard-dark.css" rel="stylesheet" />
    <link href="/assets/plugins/forn-wizard/css/demo.css" rel="stylesheet" />

    <!-- Custom scroll bar css-->
    <link href="/assets/plugins/p-scroll/p-scroll.css" rel="stylesheet" />

    <!---Font icons-->
    <link href="/assets/css-rtl/icons.css" rel="stylesheet" />
    <script>
        if ('serviceWorker' in navigator) {
            // Register a service worker hosted at the root of the
            // site using the default scope.
            navigator.serviceWorker.register('/sw.js').then(function(registration) {
                console.log('Service worker registration succeeded:', registration);
            }, /*catch*/ function(error) {
                console.log('Service worker registration failed:', error);
            });
        } else {
            console.log('Service workers are not supported.');
        }
    </script>

</head>

<body class="dark-theme">
    <div id="global-loader"></div>
    <div class="page">
        <div class="page-main">
            <div class="header">
                <div class="container">
                    <div class="d-flex">
                        <a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
                        <a class="header-brand" href="/">
                            <img src="/assets/images/spaceapps.png" class="header-brand-img" alt="spaceapps logo">
                        </a>
                    </div>
                </div>
            </div>
            <!-- Horizontal-menu -->
            <div class="sticky">
                <div class="horizontal-main hor-menu clearfix">
                    <div class="horizontal-mainwrapper container clearfix">
                        <nav class="horizontalMenu clearfix">
                            <ul class="horizontalMenu-list">
                                <li aria-haspopup="true">
                                    <a href="#preventcovid" data-toggle="modal" class="sub-icon">How to prevent COVID-19</a>
                                </li>
                            </ul>
                        </nav>
                        <!--Nav end -->
                    </div>
                </div>
            </div>
            <!-- Horizontal-menu end -->
            <div>
                <div class="container">
                    <div class="page-header">

                        <div class="card">
                            <div class="card-body">
                                <?= $this->Form->create(null, [
                                    'url' => [
                                        'action' => 'covrisk',
                                        'controller' => 'Application'
                                    ],
                                    'id' => 'frm-states'
                                ]) ?>
                                <?= $this->Form->control('states', [
                                    'options' => $statesLists,
                                    'id' => 'states',
                                    'label' => false,
                                    'empty' => 'Select your state'
                                ]) ?>
                                <?= $this->Form->end() ?>
                            </div>
                        </div>

                    </div>
                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </div>

        <!--footer-->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
                        Copyright © 2021 <a href="https://github.com/ryudeveloper/COVRISK">COVRISK</a>. Developed by Miquéias for <a href="https://www.spaceappschallenge.org/" target="_blank">NASA SPACE APPS</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer-->
    </div>

    <div class="modal fade" id="preventcovid" tabindex="-1" role="dialog" aria-labelledby="preventcovid" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Important tips</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="/assets/images/preventcovid.jpg" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Dashboard js -->
    <script src="/assets/js/vendors/jquery.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min-rtl.js"></script>
    <script src="/assets/js/vendors/jquery.sparkline.min.js"></script>
    <script src="/assets/js/vendors/selectize.min.js"></script>
    <script src="/assets/js/vendors/jquery.tablesorter.min.js"></script>
    <script src="/assets/js/vendors/circle-progress.min.js"></script>

    <!--rating -->
    <script src="/assets/plugins/rating/js/jquery.barrating.js"></script>
    <script src="/assets/plugins/rating/js/custom-ratings.js"></script>

    <!--  Horizontal-menu js -->
    <script src="/assets/plugins/horizontal-menu/horizontal-menu.js"></script>

    <!--  Sticky js -->
    <script src="/assets/js/sticky.js"></script>

    <!-- forn-wizard js-->
    <script src="/assets/plugins/forn-wizard/js/material-bootstrap-wizard-rtl.js"></script>
    <script src="/assets/plugins/forn-wizard/js/jquery.validate.min.js"></script>
    <script src="/assets/plugins/forn-wizard/js/jquery.bootstrap.js"></script>

    <!--Select2 js -->
    <script src="/assets/plugins/select2/select2.full.min.js"></script>

    <!-- Custom scroll bar Js-->
    <script src="/assets/plugins/p-scroll/p-scroll.js"></script>

    <!-- Custom Js-->
    <script src="/assets/js/custom-dark.js"></script>
    <?= $this->fetch('js') ?>
</body>

</html>