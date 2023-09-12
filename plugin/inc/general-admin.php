<?php

function get_files_list( $path ) {

	$files = scandir( $path ); // Получаем список файлов в директории
	$file_options = array();

	foreach ( $files as $file ) {
		if ( $file !== '.' && $file !== '..' ) {
			$file_options[] = $file; // Создаем массив для использования в метабоксе
		}
	}

	return $file_options;
}