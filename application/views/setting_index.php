<section class="bg-light p-4">
    <div class="container mb-5">
        <div class="row mb-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-5">
                        <h3 class="text-center mb-3"><i class="fas fa-fw fa-user-circle"></i> Profile Account</h3>
                        <img src="<?= base_url(); ?>uploads/default/<?= $user['image'] ?>" class="mx-auto d-block img-thumbnail rounded-circle mb-4" width="200" height="200">

                        <dl class="row">
                            <dt class="col-sm-3">Name</dt>
                            <dd class="col-sm-9"><?= $user['name'] ?></dd>
                            <dt class="col-sm-3">Email</dt>
                            <dd class="col-sm-9"><?= $user['email'] ?></dd>
                            <dt class="col-sm-3">Role</dt>
                            <dd class="col-sm-9"><?= $user['role'] ?></dd>
                            <dt class="col-sm-3">Status</dt>
                            <?php if ($user['active'] == 1) : ?>
                                <dd class="col-sm-9">Active</dd>
                            <?php else : ?>
                                <dd class="col-sm-9">Non Active</dd>
                            <?php endif; ?>
                            <dt class="col-sm-3">Phone Number</dt>
                            <dd class="col-sm-9"><?= $user['phone_number'] ?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-12 text-center">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-danger"><i class="fas fa-fw fa-database"></i> Truncate Table Soil Moisture Sensor</h5>
                        <p class="text-muted fst-italic">(<i class=" fas fa-fw fa-exclamation-triangle me-1"></i>Delete All History Data Soil Moisture Sensor)</p>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalTruncateTableSoilMoistureSensor">
                            <i class=" fas fa-fw fa-exclamation-triangle me-1"></i> Truncate Table
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-12 text-center">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-danger"><i class="fas fa-fw fa-database"></i> Truncate Table Watering Time</h5>
                        <p class="text-muted fst-italic">(<i class=" fas fa-fw fa-exclamation-triangle me-1"></i>Delete All History Data Watering Time)</p>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalTruncateTableWatering">
                            <i class=" fas fa-fw fa-exclamation-triangle me-1"></i> Truncate Table
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-12 text-center">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-danger"><i class="fas fa-fw fa-database"></i> Truncate Table Feeding Time</h5>
                        <p class="text-muted fst-italic">(Delete All History Data Feeding Time)</p>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalTruncateTableFeeding">
                            <i class=" fas fa-fw fa-exclamation-triangle me-1"></i> Truncate Table
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Truncate -->
<div class="modal fade" id="modalTruncateTableSoilMoistureSensor" tabindex="-1" aria-labelledby="modalTruncateTableLabelSoilMoistureSensor" aria-hidden="true">
    <div class="modal-dialog">
        <?= form_open('module/truncate_table_soil_moisture_sensor'); ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTruncateTableLabelSoilMoistureSensor">Form Truncate Table Soil Moisture Sensor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>This Action Will Cause All The History Data Deleted From All Time, <b>Are You Sure?</b></p>
                <p>If You Sure, Please <b>Enter Your Password</b> To Proceed.</p>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-sm btn-danger"><i class=" fas fa-fw fa-trash-alt mr-1"></i> Proceed</button>
            </div>
        </div>
        <?= form_close(); ?>
    </div>
</div>

<div class="modal fade" id="modalTruncateTableWatering" tabindex="-1" aria-labelledby="modalTruncateTableWateringLabel" aria-hidden="true">
    <div class="modal-dialog">
        <?= form_open('module/truncate_table_watering_time'); ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTruncateTableWateringLabel">Form Truncate Table Watering Time</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>This Action Will Cause All The History Data Deleted From All Time, <b>Are You Sure?</b></p>
                <p>If You Sure, Please <b>Enter Your Password</b> To Proceed.</p>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-sm btn-danger"><i class=" fas fa-fw fa-trash-alt mr-1"></i> Proceed</button>
            </div>
        </div>
        <?= form_close(); ?>
    </div>
</div>

<div class="modal fade" id="modalTruncateTableFeeding" tabindex="-1" aria-labelledby="modalTruncateTableFeedingLabel" aria-hidden="true">
    <div class="modal-dialog">
        <?= form_open('module/truncate_table_feeding_time'); ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTruncateTableFeedingLabel">Form Truncate Table Feeding Time</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>This Action Will Cause All The History Data Deleted From All Time, <b>Are You Sure?</b></p>
                <p>If You Sure, Please <b>Enter Your Password</b> To Proceed.</p>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-sm btn-danger"><i class=" fas fa-fw fa-trash-alt mr-1"></i> Proceed</button>
            </div>
        </div>
        <?= form_close(); ?>
    </div>
</div>