from icrawler.builtin import GoogleImageCrawler

class Images:
    def DownloadImages(self, trends):
        dirnum=['trend1', 'trend2', 'trend3', 'trend4', 'trend5']
        for i in range(5):
            google_Crawler = GoogleImageCrawler(storage = {'root_dir': dirnum[i]})
            google_Crawler.crawl(keyword = trends[i], max_num = 3)