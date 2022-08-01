#Import the required modules
from twython import Twython
import json
import csv
import pandas as pd
from pytrends.request import TrendReq
from datetime import date, timedelta

class Keywords:
    def get_tweetCount(self, keyword):
        #Set parameter
        tweetsXiteration = 100; #Where 100 is the max
        # dateFrom = str(date.today()); #Inclusive (YYYY-MM-DD)
        # dateTo = str(date.today()-timedelta(days=7)); #Exclusive (YYYY-MM-DD)
        dateFrom=str(date.today()-timedelta(days=7))
        dateTo=str(date.today())
        done = False; #Must be false

        #Setting the OAuth

        Consumer_Key = "YQ8jGC220CFrT2Er1ihm0TqG7";
        Consumer_Secret = "7fCd61d4C4l8JKSb8fkixJPSa4tYXLz0giFl7xn3HstyvykxHX";
        Access_Token = "1550080332531396609-fB888I1D9wDeWlZxC25Y5EyaZwUqNm";
        Access_Token_Secret = "1I1D6lEqucVlDLHZmtAGtPtuGERxMbnXGLzWQiS9q5gf5";

        #Connection established with Twitter API v1.1
        twitter = Twython(Consumer_Key, Consumer_Secret, Access_Token, Access_Token_Secret);

        #Twitter is queried
        response = twitter.search(q = keyword, count = tweetsXiteration, since = dateFrom, until = dateTo, result_type = 'mixed');

        #Results (partial)
        countTweets = len(response['statuses']);

        #If all the tweets have been fetched, then we are done
        if not ('next_results' in response['search_metadata']): 
            done = True;

        #If not all the tweets have been fetched, then...
        while (done == False):

            #Parsing information for maxID
            parse1 = response['search_metadata']['next_results'].split("&");
            parse2 = parse1[0].split("?max_id=");
            parse3 = parse2[1];
            maxID = parse3;

            #Twitter is queried (again, this time with the addition of 'max_id')
            response = twitter.search(q = keyword, count = tweetsXiteration, since = dateFrom, until = dateTo, max_id = maxID, include_entities = 1, result_type = 'mixed');

            #Updating the total amount of tweets fetched
            countTweets = countTweets + len(response['statuses']);

            #If all the tweets have been fetched, then we are done
            if not ('next_results' in response['search_metadata']): 
                done = True;
        return countTweets

    def getTrendsWithScores(self):        
        Trending_topics = TrendReq(hl='en-US', tz=360)
        Trending_topics.build_payload(kw_list=["/m/09j2d"], cat=18, timeframe='now 7-d', geo='IN', gprop='froogle')
        related_queries = Trending_topics.related_queries()
        x=related_queries
        key=[]
        n=len(x['/m/09j2d']['rising'])
        for i in range(n):
            key.append(x['/m/09j2d']['rising']['query'][i])
        count_tweets=dict()
        for i in key:
            a=self.get_tweetCount(i)
            count_tweets[i]=a

        sort_tweets=sorted(count_tweets.items(),key=lambda x:x[1],reverse=True)
        sorted_dict={m:g for m,g in sort_tweets}
        return sorted_dict

obj=Keywords()
x=obj.getTrendsWithScores()