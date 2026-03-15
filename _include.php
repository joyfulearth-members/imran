<?php
variables([
	//'link-to-sub-node-home' => true,
	'siteAIReplaces' => [
		'https://wiseowls.life/imran-ali-namazi/' => replaceNetworkUrls(getSiteKey(SITEIMRAN)),
		'https://imran.wiseowls.life/2025-' => replaceNetworkUrls(getSiteKey(SITEIMRAN, '2025-')),
		'https://Imran.wiseowls.life/' =>  replaceNetworkUrls(getSiteKey(SITEIMRAN, 'writing/')),
		'https://imran.wiseowls.life/' =>  replaceNetworkUrls(getSiteKey(SITEIMRAN, 'writing/')),
	]
]);
setup_cdn('people/imran/');

function site_before_render_todo() {
	if (getPageParameterAt(1) && nodeIsOneOf(['little-things', 'wordplay']))
		variable('skip-container-for-this-page', true);
}
