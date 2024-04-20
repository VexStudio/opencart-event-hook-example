<?php

class ControllerExtensionModuleVexStudio extends Controller
{
    public function install()
    {
        $this->load->model('setting/event');
        $this->model_setting_event->addEvent(
            'vx_order_history_after',
            'catalog/model/checkout/order/addOrderHistory/after',
            'extension/module/vx_extension/historyAfter'
        );
    }

    public function uninstall()
    {
        $this->load->model('setting/event');
        $this->model_setting_event->deleteEventByCode('vx_order_history_after');
    }
}
