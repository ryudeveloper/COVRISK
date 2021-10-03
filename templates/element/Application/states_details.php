<?php

use Cake\I18n\FrozenTime;
?>
<div class="row">
    <div class="col-sm-12 col-lg-3 col-md-6">
        <div class="card card-img-holder text-default">
            <div class="row">
                <div class="col-4">
                    <div class="circle-icon bg-success align-items-center text-center shadow-success"><img src="/assets/images/circle.svg" class="card-img-absolute"><i class=" lnr lnr-users fs-30 text-white mt-4 "></i></div>
                </div>
                <div class="col-8">
                    <div class="card-body p-4">
                        <h3 class="mb-3"><?= $this->Number->format($state['census']['population']) ?></h3>
                        <h5 class="font-weight-normal mb-0">Population</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-6 col-md-6">
        <div class="card card-img-holder text-default">
            <div class="row">
                <div class="col-4">
                    <div class="circle-icon bg-info align-items-center text-center shadow-info"><img src="/assets/images/circle.svg" class="card-img-absolute"><i class="lnr lnr-map-marker fs-30 text-white mt-4"></i></div>
                </div>
                <div class="col-8">
                    <div class="card-body p-4">
                        <h3 class="mb-3"><?= $state['name'] ?></h3>
                        <h5 class="font-weight-normal mb-0">Selected state</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-lg-3 col-md-6">
        <div class="card card-img-holder text-default bg-color">
            <div class="row">
                <div class="col-4">
                    <div class="circle-icon bg-primary text-center align-self-center shadow-primary"><img src="/assets/images/circle.svg" class="card-img-absolute"><i class="lnr lnr-calendar-full fs-30  text-white mt-4"></i></div>
                </div>
                <div class="col-8">
                    <div class="card-body p-4">
                        <h3 class="mb-3"><?= $daily[0]['date'] ?></h3>
                        <h5 class="font-weight-normal mb-0">Date of infos</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-3 ">
        <div class="card widgets-cards bg-primary">
            <div class="card-body d-flex justify-content-center align-items-center">
                <div class="chart-circle chart-circle-sm ml-5" data-value="<?php
                                                                            if ($daily[0]['outcomes']['death']['total']['calculated']['population_percent'] > 0)
                                                                                echo $this->Number->precision($daily[0]['outcomes']['death']['total']['calculated']['population_percent'] / 100, 2);
                                                                            else
                                                                                echo 0;
                                                                            ?>" data-thickness="6" data-color="#ca8411"><canvas width="64" height="64"></canvas><canvas width="64" height="64"></canvas>
                    <div class="chart-circle-value text-white"><?php
                                                                if ($daily[0]['outcomes']['death']['total']['calculated']['population_percent'] > 0)
                                                                    echo $this->Number->precision($daily[0]['outcomes']['death']['total']['calculated']['population_percent'], 1);
                                                                else
                                                                    echo 0;
                                                                ?>%</div>
                </div>
                <div class="wrp text-wrapper text-white">
                    <p class="mt-3"><?php
                                    if ($daily[0]['outcomes']['death']['total']['value'] > 0)
                                        echo $this->Number->format($daily[0]['outcomes']['death']['total']['value']);
                                    else
                                        echo 0;
                                    ?></p>
                    <p class=" mt-1">Total deaths</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-3 ">
        <div class="card widgets-cards bg-success">
            <div class="card-body d-flex justify-content-center align-items-center">
                <div class="chart-circle chart-circle-sm ml-5" data-value="<?php
                                                                            if ($daily[0]['outcomes']['hospitalized']['currently']['calculated']['population_percent'] > 0)
                                                                                echo $this->Number->precision($daily[0]['outcomes']['hospitalized']['currently']['calculated']['population_percent'] / 100, 2);
                                                                            else
                                                                                echo 0;
                                                                            ?>" data-thickness="6" data-color="#2b9146"><canvas width="64" height="64"></canvas><canvas width="64" height="64"></canvas>
                    <div class="chart-circle-value text-white"><?php
                                                                if ($daily[0]['outcomes']['hospitalized']['currently']['calculated']['population_percent'])
                                                                    echo $this->Number->precision($daily[0]['outcomes']['hospitalized']['currently']['calculated']['population_percent'], 1);
                                                                else
                                                                    echo 0;
                                                                ?>%</div>
                </div>
                <div class="wrp text-wrapper text-white">
                    <p class="mt-3"><?php
                                    if ($daily[0]['outcomes']['hospitalized']['currently']['value'])
                                        echo $this->Number->format($daily[0]['outcomes']['hospitalized']['currently']['value']);
                                    else
                                        echo 0;
                                    ?></p>
                    <p class=" mt-1">Total outcomes</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-3 ">
        <div class="card widgets-cards bg-secondary">
            <div class="card-body d-flex justify-content-center align-items-center">
                <div class="chart-circle chart-circle-sm ml-5" data-value="<?php
                                                                            if ($daily[0]['tests']['pcr']['total']['calculated']['population_percent'] > 0)
                                                                                echo $this->Number->precision($daily[0]['tests']['pcr']['total']['calculated']['population_percent'] / 100, 2);
                                                                            else
                                                                                echo 0;
                                                                            ?>" data-thickness="6" data-color="#f66b4e"><canvas width="64" height="64"></canvas><canvas width="64" height="64"></canvas>
                    <div class="chart-circle-value text-white"><?php
                                                                if ($daily[0]['tests']['pcr']['total']['calculated']['population_percent'])
                                                                    echo $this->Number->precision($daily[0]['tests']['pcr']['total']['calculated']['population_percent'], 1);
                                                                else
                                                                    echo 0;
                                                                ?>%</div>
                </div>
                <div class="wrp text-wrapper text-white">
                    <p class="mt-3"><?php
                                    if ($daily[0]['tests']['pcr']['total']['value'])
                                        echo $this->Number->format($daily[0]['tests']['pcr']['total']['value']);
                                    else
                                        echo 0;
                                    ?></p>
                    <p class=" mt-1">Total testing</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-3 ">
        <div class="card widgets-cards bg-info">
            <div class="card-body d-flex justify-content-center align-items-center">
                <div class="chart-circle chart-circle-sm ml-5" data-value="<?php
                                                                            if ($daily[0]['cases']['total']['calculated']['population_percent'] > 0)
                                                                                echo $this->Number->precision($daily[0]['cases']['total']['calculated']['population_percent'] / 100, 2);
                                                                            else
                                                                                echo 0;
                                                                            ?>" data-thickness="6" data-color="#3578d5"><canvas width="64" height="64"></canvas><canvas width="64" height="64"></canvas>
                    <div class="chart-circle-value text-white"><?php
                                                                if ($daily[0]['cases']['total']['calculated']['population_percent'])
                                                                    echo $this->Number->precision($daily[0]['cases']['total']['calculated']['population_percent'], 1);
                                                                else
                                                                    echo 0;
                                                                ?>%</div>
                </div>
                <div class="wrp text-wrapper text-white">
                    <p class="mt-3"><?php
                                    if ($daily[0]['cases']['total']['value'])
                                        echo $this->Number->format($daily[0]['cases']['total']['value']);
                                    else
                                        echo 0;
                                    ?></p>
                    <p class=" mt-1">Total cases</p>
                </div>
            </div>
        </div>
    </div>
</div>