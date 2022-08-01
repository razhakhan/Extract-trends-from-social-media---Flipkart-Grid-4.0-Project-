# Python Script to Extract tweets of a
# particular keyword using Tweepy and Pandas

# import modules
from sys import api_version
import pandas as pd
import tweepy
from datetime import date, timedelta

class TweetLink:
    # function to display data of each tweet
    def storeTweetData(self, n, ith_tweet, ans):
            id=ith_tweet[0]
            id=str(id)
            base="https://twitter.com/twitter/statuses/"
            temp=base+id
            ans.append(temp)

    # function to perform data extraction
    def scrape(self,words, date_since, numtweet, api):


            # Creating DataFrame using pandas
            db = pd.DataFrame(columns=['id'])

            # We are using .Cursor() to search
            # through twitter for the required tweets.
            # The number of tweets can be
            # restricted using .items(number of tweets)
            tweets = tweepy.Cursor(api.search_tweets,
                                words,geocode="20.5937,78.9629,3300km", lang="en",
                                since_id=date_since,
                                tweet_mode='extended').items(numtweet)


            # .Cursor() returns an iterable object. Each item in
            # the iterator has various attributes
            # that you can access to
            # get information about each tweet
            list_tweets = [tweet for tweet in tweets]

            # Counter to maintain Tweet Count
            i = 1

            # we will iterate over each tweet in the
            # list for extracting information about each tweet
            ans=[]
            for tweet in list_tweets:
                    id = tweet.id
                    ith_tweet = [id]
                    db.loc[len(db)] = ith_tweet

                    # Function call to print tweet data on screen
                    self.storeTweetData(i, ith_tweet, ans)
                    i = i+1

            filename = 'charo.csv'

            # we will save our database as a CSV file.
            db.to_csv(filename, mode='a', index=False, header=False)
            return ans


    def getTweetLinks(self, words):

            # Enter your own credentials obtained
            # from your developer account
            consumer_key = "YQ8jGC220CFrT2Er1ihm0TqG7"
            consumer_secret = "7fCd61d4C4l8JKSb8fkixJPSa4tYXLz0giFl7xn3HstyvykxHX"
            access_key = "1550080332531396609-fB888I1D9wDeWlZxC25Y5EyaZwUqNm"
            access_secret = "1I1D6lEqucVlDLHZmtAGtPtuGERxMbnXGLzWQiS9q5gf5"
            auth = tweepy.OAuthHandler(consumer_key, consumer_secret)
            auth.set_access_token(access_key, access_secret)
            api = tweepy.API(auth, wait_on_rate_limit=True)

            # Enter Hashtag and initial date
            date_since = str(date.today()-timedelta(days=30));

            # number of tweets you want to extract in one run
            numtweet = 3
            res=[]
            for i in words:
                f=i+" filter:media"
                ans=self.scrape(f, date_since, numtweet, api)
                if len(ans)<3:
                    temp=self.scrape(i, date_since, numtweet, api)
                    ans.extend(temp[:3-len(ans)])
                res.append(ans)
            return res