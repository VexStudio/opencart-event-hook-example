<?php

/**
 * Here we'll have all methods to handle events after
 * the order history is added.
 * TODO: add credits etc.
 */
class ControllerExtensionModuleVxExtension extends Controller {

    public function historyAfter($eventRoute, &$data)
    {
        error_log("Entered add menu");
        error_log(print_r([$eventRoute, $data], true));
        file_put_contents(
            '/tmp/addOrderHistory'.date('Y-m-d-H-i-s').'.json',
            json_encode([$eventRoute, $data])
        );
    }

}