<?php defined('SYSPATH') or die('No direct script access.');

return array
(
	'default' => array
	(
		'lang' => NULL, //bool, if null using from I18n::lang()
		'root' => DOCROOT.'media/', // path to root directory
		'URL' => Url::base().'media/', // root directory URL
		'rootAlias' => 'Home', // display this instead of root directory name
//		'uploadAllow' => array('images/*'),
//		'uploadDeny' => array('all'),
//		'uploadOrder' => 'deny,allow'
//		'disabled' => array(), // list of not allowed commands
//		'dotFiles' => FALSE, // display dot files
//		'dirSize' => TRUE, // count total directories sizes
//		'fileMode' => 0777, // new files mode
//		'dirMode' => 0777, // new folders mode
//		'mimeDetect' => 'auto', // files mimetypes detection method (finfo, mime_content_type, linux (file -ib), bsd (file -Ib), internal (by extensions))
//		'uploadAllow' => array(), // mimetypes which allowed to upload
//		'uploadDeny' => array(), // mimetypes which not allowed to upload
//		'uploadOrder' => 'deny,allow', // order to proccess uploadAllow and uploadAllow options
//		'imgLib' => 'auto', // image manipulation library (imagick, mogrify, gd)
//		'tmbDir' => '.tmb', // directory name for image thumbnails. Set to "" to avoid thumbnails generation
//		'tmbCleanProb' => 1, // how frequiently clean thumbnails dir (0 - never, 100 - every init request)
//		'tmbAtOnce' => 5, // number of thumbnails to generate per request
//		'tmbSize' => 48, // images thumbnails size (px)
//		'tmbCrop'      => true,         // crop thumbnails (true - crop, false - scale image to fit thumbnail size)
//		'tmbBgColor'   => '#ffffff',    // thumbnail background color
//		'fileURL' => TRUE, // display file URL in "get info"
//		'dateFormat' => 'j M Y H:i', // file modification date format
//		'logger' => null, // object logger
//		'defaults' => array // default permisions
//		(
//			'read' => TRUE,
//			'write' => TRUE,
//			'rm' => TRUE
//		),
//		'perms'        => array(), // individual folders/files permisions    
//		'debug'        => TRUE, // send debug to client
//		'archiveMimes' => array(), // allowed archive's mimetypes to create. Leave empty for all available types.
//		'archivers'    => array() // info about archivers to use. See example below. Leave empty for auto detect
//		'archivers' => array
//		(
//			'create' => array
//			(
//		 		'application/x-gzip' => array
//				(
//		 			'cmd' => 'tar',
//		 			'argc' => '-czf',
//		 			'ext'  => 'tar.gz'
//		 		)
//		 	),
//		 	'extract' => array
//		 	(
//		 		'application/x-gzip' => array
//		 		(
//		 			'cmd'  => 'tar',
//		 			'argc' => '-xzf',
//		 			'ext'  => 'tar.gz'
//		 		),
//		 		'application/x-bzip2' => array
//		 		(
//		 			'cmd'  => 'tar',
//		 			'argc' => '-xjf',
//		 			'ext'  => 'tar.bz'
//		 		)
//			)
//		)
	),
);