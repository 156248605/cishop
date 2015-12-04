<?php
//过滤字段
function filter(array $data,array $_fields)
{
    $_selectData = array();
    if (is_array($data) && !empty($data)) {
        foreach ($data as $_key => $_value) {
            if (in_array($_key, $_fields)) {
                $_selectData[$_key] = $_value;
            }
        }
    }
    return $_selectData;
}
function page_config($count,$url){
    $config['base_url']=$url;
    $config['full_tag_open'] = '<p>';
    $config['full_tag_close'] = '</p>';
    $config['total_rows']=$count;
    $config['per_page'] = 8;
    $config['uri_segment'] = 3;
    $config['first_link'] = '第一页';
    $config['last_link'] = '最后一页';
    $config['next_link'] = '下一页';
    $config['prev_link'] = '上一页';
    return $config;
}
