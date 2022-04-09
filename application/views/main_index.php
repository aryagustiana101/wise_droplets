<section class="bg-light p-4" id="home">
    <div class="container mt-5 mb-5">
        <div class="row mb-3">
            <div class="text-center">
                <h2><i class="fas fa-fw fa-clock"></i> Current Soil Moisture Sensor Value:</h2>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-4 sensor-main border border-4 rounded-circle border-primary text-center">
                <h1 class="display-1 sensor-main-number">
                    -
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 text-center mb-3">
                <h3><i class="fas fa-fw fa-thermometer"></i> Soil Status:</h3>
                <h1 class="display-3 soil-status">-</h1>
            </div>
            <div class="col-md-4 text-center">
                <h3><i class="fas fa-fw fa-oil-can"></i> Last Watering Time</h3>
                <h1 class="display-6 watering-time-indicator">
                    -
                </h1>
            </div>
            <div class="col-md-4 text-center mb-3">
                <h3><i class="fas fa-fw fa-drumstick-bite"></i> Last Feeding Time:</h3>
                <h1 class="display-6 feeding-time-indicator">
                    -
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="p-4" id="about">
    <div class="container mt-5 mb-5">
        <div class="row mb-3">
            <div class="col-lg-12 text-center">
                <h1><i class="fas fa-fw fa-align-justify"></i> About The Prototype</h1>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-12">
                <p style="text-align: justify;">This project created to fulfill the final assignment of the System Internet of Things subject. This project made for controlling and monitoring the automatic watering system, and also for controlling the fish feeder. This website receives and sends data through Message Queuing Telemetry Transport that runs over websocket. All of the site's features are still developed and temporary, might be changed anytime.</p>
            </div>
        </div>
    </div>
</section>

<section class="p-4 bg-light" id="control">
    <div class="container mt-5 mb-5">
        <div class="row mb-3">
            <div class="col-lg-12 text-center">
                <h1><i class="fas fa-fw fa-sliders-h"></i> Control Section</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-3">
                <div class="card" style="height: 150px;">
                    <div class="card-body">
                        <h3>Main Water Pump: <span class="d-block indicator-switch-main-pump">OFF</span></h3>
                        <div class="form-check form-switch centered">
                            <input class="form-check-input switch-main-pump" type="checkbox" id="flexSwitchCheckDefault" style="width: 70px; height:44px;" value="0">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="card" style="height: 150px;">
                    <div class="card-body">
                        <h3>Fish Feeder</h3>
                        <button type="button" class="btn btn-primary btn-fish-feeder">Push To Serve</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-4" id="history">
    <div class="container mt-5 mb-5">
        <div class="row mb-3">
            <div class="col-lg-12 text-center">
                <h1><i class="fas fa-fw fa-history"></i> History Section</h1>
                <p class="text-muted fst-italic">(<i class=" fas fa-fw fa-exclamation-triangle me-1"></i>Reload Page To Get The Newest Data, Currently This Section Is Not Asynchronous and Responsive)</p>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-12">
                Reload Button:
                <button class="btn btn-sm btn-primary ms-1 reload-button" type="button"><i class="fas fa-fw fa-sync-alt"></i></button>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Soil Moisture Sensor Value History
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="card p-4">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <p>Export Data:</p>
                                            <table id="table_main" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th>No.</th>
                                                        <th>Value Sensor</th>
                                                        <th>Time</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1;
                                                    foreach ($valueSensors as $valueSensor) : ?>
                                                        <tr class="text-center">
                                                            <td><?= $i++; ?></td>
                                                            <td><?= $valueSensor['value_sensor']; ?></td>
                                                            <td><?= date("d F Y H:i:s", strtotime($valueSensor['created_at'])); ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Watering Time History
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="card p-4">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <p>Export Data:</p>
                                            <table id="table_second" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th>No.</th>
                                                        <th>Value</th>
                                                        <th>Time</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1;
                                                    foreach ($valueWaterings as $valueWatering) : ?>
                                                        <tr class="text-center">
                                                            <td><?= $i++; ?></td>
                                                            <td><?= $valueWatering['value']; ?></td>
                                                            <td><?= date("d F Y H:i:s", strtotime($valueWatering['created_at'])); ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Feeding Time History
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="card p-4">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <p>Export Data:</p>
                                            <table id="table_third" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th>No.</th>
                                                        <th>Value</th>
                                                        <th>Time</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1;
                                                    foreach ($valueFeedings as $valueFeeding) : ?>
                                                        <tr class="text-center">
                                                            <td><?= $i++; ?></td>
                                                            <td><?= $valueFeeding['value']; ?></td>
                                                            <td><?= date("d F Y H:i:s", strtotime($valueFeeding['created_at'])); ?></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>