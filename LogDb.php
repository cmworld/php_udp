<?php

class LogDb extends LogDbBase
{
    /**
     * 获取logdb配置文件
     * @return array(server_ip, server_port)
     * server_ip string  logdb服务ip
     * server_port int logdb端口
     */
    public function getLogDbConfig()
    {
        $arr = config('system.server_logdb');
        return !empty($arr) ? $arr : array();
    }

    /**
     * LogDB服务所在IP
     * @return string
     */
    public function getServerIp()
    {
        $logdbArr = $this->getLogDbConfig();
        return isset($logdbArr['server_ip']) ? $logdbArr['server_ip'] : '';
    }

    /**
     * LogDB服务所在端口
     * @return string
     */
    public function getServerPort()
    {
        $logdbArr = $this->getLogDbConfig();
        return isset($logdbArr['server_port']) ? $logdbArr['server_port'] : '';
    }

    /**
     * LogDB服务入库表字段类型的配置
     * @return string
     */
    public function getTableFieldTypes()
    {
        return array(
            'user_id' => 'varchar',
            'user_token' => 'varchar',
            'api_name' => 'varchar',
            'param' => 'varchar',
            'status' => 'tinyint',
            'err_code' => 'int',
            'err_message' => 'varchar',
            'user_ip' => 'varchar',
            'server_ip' => 'varchar',
            'end_time' => 'int',
            'spend_time' => 'float',
            'app_id' => 'varchar',
            'ud_id' => 'varchar',
            'request_method' => 'varchar',
            'user_sys' => 'varchar',
            'user_phone' => 'varchar',
        );
    }
}