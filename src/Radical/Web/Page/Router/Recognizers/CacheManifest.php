<?php
namespace Radical\Web\Page\Router\Recognisers;

use Radical\Utility\Net\URL;
use Radical\Web\Page\Router\IPageRecognise;
use Radical\Web\Page\Handler;

class CacheManifest implements IPageRecognise {
	static function recognise(URL $url){
		$url = $url->getPath();
		if($url->firstPathElement() == 'cache.manifest'){
			$url->removeFirstPathElement();
			
			return Handler::Objectify ( 'CacheManifest' );
		}
	}
}