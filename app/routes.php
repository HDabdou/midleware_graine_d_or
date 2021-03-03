<?php


$app->group('/grainedor/admin', function () {

	$this->post('/createuserGrainedor', App\Controllers\midelwareIGrainedorController::class .':createuserGrainedor');
});







