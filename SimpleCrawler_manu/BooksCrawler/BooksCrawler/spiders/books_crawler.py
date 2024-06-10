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





