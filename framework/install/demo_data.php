<?php
function dana_fw_ext_backups_demos($demos) {
    $demos_array = array(
		'dana' => array(
			'title' => esc_html__('Dana', 'dana'),
			'screenshot' => 'http://bearsthemespremium.com/install/demo/dana/dana/screenshot.png',
			'preview_link' => 'http://bearsthemespremium.com/theme/dana/',
		),
		
    );

    $download_url = 'http://bearsthemespremium.com/install/demo/dana/';

    foreach ($demos_array as $id => $data) {
        $demo = new FW_Ext_Backups_Demo($id, 'piecemeal', array(
            'url' => $download_url,
            'file_id' => $id,
        ));
        $demo->set_title($data['title']);
        $demo->set_screenshot($data['screenshot']);
        $demo->set_preview_link($data['preview_link']);

        $demos[ $demo->get_id() ] = $demo;

        unset($demo);
    }

    return $demos;
}
add_filter('fw:ext:backups-demo:demos', 'dana_fw_ext_backups_demos');
