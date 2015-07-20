<?php
if ( ! function_exists('uinque_name')) {
    function uinque_name($uppercase = true) {
        if (!$uppercase) {
            return date('Y_m_d_his_') . uniqid();
        }
        return date('Y_m_d_his_') . strtoupper(uniqid());
    }
}