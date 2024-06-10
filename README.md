
## git push origin branch2
![螢幕擷取畫面 2024-06-10 164703](https://github.com/chenkuanhan/Web-lesson/assets/104495841/74029ee9-32d4-4f9e-8a2f-38abf22d34c1)

## scrapy crawl books_crawler -o books.csv
```Python
import scrapy


class BooksCrawlerSpider(scrapy.Spider):
    name = "books_crawler"
    # allowed_domains = ["www.books.com.tw"]
    start_urls = ["https://www.books.com.tw/web/books_nbtopm_19/"]

    def parse(self, response):
        for book in response.css("div.box clearfix"):
            name = book.css("div.type02_bd-a h4 a::text").get()
            url = book.css("div.type02_bd-a h4 a::attr(href)").get()
            prices = book.css("div.type02_bd-a ul.msg li.price_a strong b::text").getall()

            yield {
            "書名":name,
            "網址":url,
            "優惠價": prices[0],
            "原價": prices[1]

            }







```

```
(base) PS C:\Users\Asus\Documents\Web-lesson> cd C:\Users\Asus\Documents\Web-lesson\SimpleCrawler_manu\BooksCrawler
(base) PS C:\Users\Asus\Documents\Web-lesson\SimpleCrawler_manu\BooksCrawler> scrapy crawl books_crawler -o books.csv
2024-06-10 16:43:02 [scrapy.utils.log] INFO: Scrapy 2.8.0 started (bot: BooksCrawler)
2024-06-10 16:43:02 [scrapy.utils.log] INFO: Versions: lxml 4.9.3.0, libxml2 2.10.4, cssselect 1.2.0, parsel 1.8.1, w3lib 2.1.2, Twisted 22.10.0, Python 3.11.7 | packaged by Anaconda, Inc. | (main, Dec 15 2023, 18:05:47) [MSC v.1916 64 bit (AMD64)], pyOpenSSL 24.0.0 (OpenSSL 3.0.13 30 Jan 2024), cryptography 42.0.2, Platform Windows-10-10.0.22631-SP0
2024-06-10 16:43:02 [scrapy.crawler] INFO: Overridden settings:
{'BOT_NAME': 'BooksCrawler',
 'FEED_EXPORT_ENCODING': 'utf-8',
 'NEWSPIDER_MODULE': 'BooksCrawler.spiders',
 'REQUEST_FINGERPRINTER_IMPLEMENTATION': '2.7',
 'ROBOTSTXT_OBEY': True,
 'SPIDER_MODULES': ['BooksCrawler.spiders'],
 'TWISTED_REACTOR': 'twisted.internet.asyncioreactor.AsyncioSelectorReactor'}
2024-06-10 16:43:02 [asyncio] DEBUG: Using selector: SelectSelector
2024-06-10 16:43:02 [scrapy.utils.log] DEBUG: Using reactor: twisted.internet.asyncioreactor.AsyncioSelectorReactor
2024-06-10 16:43:02 [scrapy.utils.log] DEBUG: Using asyncio event loop: asyncio.windows_events._WindowsSelectorEventLoop
2024-06-10 16:43:02 [scrapy.extensions.telnet] INFO: Telnet Password: f271c998da51cfff
2024-06-10 16:43:02 [scrapy.middleware] INFO: Enabled extensions:
['scrapy.extensions.corestats.CoreStats',
 'scrapy.extensions.telnet.TelnetConsole',
 'scrapy.extensions.feedexport.FeedExporter',
 'scrapy.extensions.logstats.LogStats']
2024-06-10 16:43:02 [scrapy.middleware] INFO: Enabled downloader middlewares:
['scrapy.downloadermiddlewares.robotstxt.RobotsTxtMiddleware',
 'scrapy.downloadermiddlewares.httpauth.HttpAuthMiddleware',
 'scrapy.downloadermiddlewares.downloadtimeout.DownloadTimeoutMiddleware',
 'scrapy.downloadermiddlewares.defaultheaders.DefaultHeadersMiddleware',
 'scrapy.downloadermiddlewares.useragent.UserAgentMiddleware',
 'scrapy.downloadermiddlewares.retry.RetryMiddleware',
 'scrapy.downloadermiddlewares.redirect.MetaRefreshMiddleware',
 'scrapy.downloadermiddlewares.httpcompression.HttpCompressionMiddleware',
 'scrapy.downloadermiddlewares.redirect.RedirectMiddleware',
 'scrapy.downloadermiddlewares.cookies.CookiesMiddleware',
 'scrapy.downloadermiddlewares.httpproxy.HttpProxyMiddleware',
 'scrapy.downloadermiddlewares.stats.DownloaderStats']
2024-06-10 16:43:02 [scrapy.middleware] INFO: Enabled spider middlewares:
['scrapy.spidermiddlewares.httperror.HttpErrorMiddleware',
 'scrapy.spidermiddlewares.offsite.OffsiteMiddleware',
 'scrapy.spidermiddlewares.referer.RefererMiddleware',
 'scrapy.spidermiddlewares.urllength.UrlLengthMiddleware',
 'scrapy.spidermiddlewares.depth.DepthMiddleware']
2024-06-10 16:43:02 [scrapy.middleware] INFO: Enabled item pipelines:
[]
2024-06-10 16:43:02 [scrapy.core.engine] INFO: Spider opened
2024-06-10 16:43:02 [scrapy.extensions.logstats] INFO: Crawled 0 pages (at 0 pages/min), scraped 0 items (at 0 items/min)
2024-06-10 16:43:02 [scrapy.extensions.telnet] INFO: Telnet console listening on 127.0.0.1:6023
2024-06-10 16:43:02 [scrapy.core.engine] DEBUG: Crawled (200) <GET https://www.books.com.tw/robots.txt> (referer: None)
2024-06-10 16:43:02 [tldextract.cache] WARNING: unable to cache publicsuffix.org-tlds.{'urls': ('https://publicsuffix.org/list/public_suffix_list.dat', 'https://raw.githubusercontent.com/publicsuffix/list/master/public_suffix_list.dat'), 'fallback_to_snapshot': True} in C:\ProgramData\anaconda3\Lib\site-packages\tldextract\.suffix_cache/publicsuffix.org-tlds\de84b5ca2167d4c83e38fb162f2e8738.tldextract.json. This could refresh the Public Suffix List over HTTP every app startup. Construct your `TLDExtract` with a writable `cache_dir` or set `cache_dir=False` to silence this warning. [WinError 5] 存取被拒。: 'C:\\ProgramData\\anaconda3\\Lib\\site-packages\\tldextract\\.suffix_cache'
2024-06-10 16:43:02 [urllib3.connectionpool] DEBUG: Starting new HTTPS connection (1): publicsuffix.org:443
2024-06-10 16:43:02 [urllib3.connectionpool] DEBUG: https://publicsuffix.org:443 "GET /list/public_suffix_list.dat HTTP/1.1" 200 84226
2024-06-10 16:43:02 [scrapy.core.engine] DEBUG: Crawled (200) <GET https://www.books.com.tw/web/books_nbtopm_19/> (referer: None)
2024-06-10 16:43:03 [py.warnings] WARNING: C:\ProgramData\anaconda3\Lib\site-packages\scrapy\selector\unified.py:83: UserWarning: Selector got both text and root, root is being ignored.
  super().__init__(text=text, type=st, root=root, **kwargs)

2024-06-10 16:43:03 [scrapy.core.engine] INFO: Closing spider (finished)
2024-06-10 16:43:03 [scrapy.statscollectors] INFO: Dumping Scrapy stats:
{'downloader/request_bytes': 482,
 'downloader/request_count': 2,
 'downloader/request_method_count/GET': 2,
 'downloader/response_bytes': 47081,
 'downloader/response_count': 2,
 'downloader/response_status_count/200': 2,
 'elapsed_time_seconds': 0.465536,
 'finish_reason': 'finished',
 'finish_time': datetime.datetime(2024, 6, 10, 8, 43, 3, 94240),
 'httpcompression/response_bytes': 275946,
 'httpcompression/response_count': 2,
 'log_count/DEBUG': 7,
 'log_count/INFO': 10,
 'log_count/WARNING': 2,
 'response_received_count': 2,
 'robotstxt/request_count': 1,
 'robotstxt/response_count': 1,
 'robotstxt/response_status_count/200': 1,
 'scheduler/dequeued': 1,
 'scheduler/dequeued/memory': 1,
 'scheduler/enqueued': 1,
 'scheduler/enqueued/memory': 1,
 'start_time': datetime.datetime(2024, 6, 10, 8, 43, 2, 628704)}
2024-06-10 16:43:03 [scrapy.core.engine] INFO: Spider closed (finished)

```
