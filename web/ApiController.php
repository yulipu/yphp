<?php
/**
 * @author
 * @license MIT
 */
namespace fate\web;

class ApiController {
    
    /**
     * 输出 ajax 数据
     *
     * @param array $data
     * @param integer $status
     */
    public function ajaxReturn($data, $status = 0, $message = '') {
        echo json_encode([
            'data' => $data,
            'status' => $status,
            'message' => $message
        ]);
        exit;
    }
    
}
