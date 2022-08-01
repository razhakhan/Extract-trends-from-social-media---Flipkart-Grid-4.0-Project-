import urllib.request
import json

class FlipkartDetails:

    def getProducts(self, word):
        
        user_agent = 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.7) Gecko/2009021910 Firefox/3.0.7'

        url = "https://flipkart.dvishal485.workers.dev/search/"
        newcon=""
        for i in word:
            if i==" ":
                newcon+="%20"
            else:
                newcon+=i
        url+=newcon
        #url = "https://flipkart.dvishal485.workers.dev/search/smartwatches"
        headers={'User-Agent':user_agent,} 

        request=urllib.request.Request(url,None,headers) #The assembled request
        response = urllib.request.urlopen(request)
        data = response.read() # The data u need
        #print(type(data))
        x=json.loads(data)
        res=[]
        for i in range(3):
            temp=[]
            name=x['result'][i]['name']
            link=x['result'][i]['link']
            temp.append(name)
            temp.append(link)
            res.append(temp)
        return res