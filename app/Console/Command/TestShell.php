<?php

class TestShell extends AppShell {

	public function main() {
		
// 		$number = 1234.56;
		
// 		// english notation (default)
// 		$english_format_number = number_format($number);
// 		Cakelog::write('info', $english_format_number);
// 		// 1,235
		
// 		// French notation
// 		$nombre_format_francais = number_format($number, 2, ',', ' ');
// 		Cakelog::write('info', $nombre_format_francais);
// 		// 1 234,56
		
// 		$number = 1234.5678;
		
// 		// english notation without thousands separator
// 		$english_format_number = number_format($number, 2, '.', '');
// 		Cakelog::write('info', $english_format_number);
// 		// 1234.57
		
		// php 5.4.0新增支持对函数返回数组的成员解析
		// test
		// test from git command of branch jun
		// test from git command of branch jun commit without add: can't! Must add before.
		// commit from master
		// add from branch jun
		$pc_count = Configure::read('top_menu_show_count')['PC'];
		
		$arrTmp = array(
			'PC' => 8,
			'SP' => array('a'=>4),
		);
		
		
		// 支持数组提领(Array dereferencing support)
		function data() {
			return ['name' => 'Gonzalo', 'surname' => 'Ayuso'];
		}
		echo data()['name'];
// 		$params = Configure::read('top_menu_show_count');
// 		$pc_count = $params['PC'];
		
		
		Cakelog::write('info',
		__FILE__ . ' ' . __METHOD__ . ' ' . __LINE__ . ' : ' .$pc_count.' : '.$arrTmp['SP']['a']);
	}
	
}
