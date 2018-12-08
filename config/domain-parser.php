<?php

return [
    /**
     * External Public Suffix List URL
     */
    'url_psl' => 'https://publicsuffix.org/list/public_suffix_list.dat',
    /**
     * External Root Zone Domain URL
     */
    'url_rzd' => 'https://data.iana.org/TLD/tlds-alpha-by-domain.txt',
    /**
     * Name of the cache to use. If a string is given it will be one of
     * the store listed in the `stores` configuration array in 
     * your `cache` configuration file.
     */
    'cache_client' => 'file',
    /**
     * Cache TTL  Can be a string, an int, a DateInterval or a DateTimeInterface object
     */
    'cache_ttl' => '1 DAY',
    /**
     * Additionals CURL options to add to the CurlHTTP Client to enable
     * correctly retrieving the PSL and RZD data. the options takes a array
     * usable by curl_setopt_array
     */
    'http_client' => [],
];