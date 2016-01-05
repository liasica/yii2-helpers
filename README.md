[![Latest Stable Version][image-1]][1] [![Total Downloads][image-2]][2] [![Latest Unstable Version][image-3]][3] [![License][image-4]][4]

[1]:	https://packagist.org/packages/liasica/yii2-helpers
[2]:	https://packagist.org/packages/liasica/yii2-helpers
[3]:	https://packagist.org/packages/liasica/yii2-helpers
[4]:	https://packagist.org/packages/liasica/yii2-helpers

[image-1]:	https://poser.pugx.org/liasica/yii2-helpers/v/stable
[image-2]:	https://poser.pugx.org/liasica/yii2-helpers/downloads
[image-3]:	https://poser.pugx.org/liasica/yii2-helpers/v/unstable
[image-4]:	https://poser.pugx.org/liasica/yii2-helpers/license

## ArrayTOXml Usage
```php
`$xml = new ArrayToXML();
print $xml->buildXML($array);
```

## SimpleArrayToXml Usage
```php
$xml = new SimpleArrayToXml($redpack->redpackData);
var_dump($xmlmodel->buildXML());
```

## Curl Usage
# 1.curl_get
```php
$curl = new Curl($url);
var_dump($curl->Get());
```
# 2.curl_post
```php
$curl = new Curl($url);
$curl->setData($data);
var_dump($curl->Post());
```
# 3.curl_post_ssl
```php
$certs = [
CURLOPT_SSLCERT => 'CURLOPT_SSLCERT.pem',
CURLOPT_SSLKEY => 'CURLOPT_SSLKEY.pem',
];
$curl = new Curl($url);
$curl->setData($data);
$curl->setCerts($certs);
var_dump($curl->postSSL());
```
