# Extract-trends-from-social-media--Flipkart-Grid-4.0-Project-Team-Vengeance

Full Demo Video : https://youtu.be/X1WTCclDuuQ 

Overall Problem :

Identify trends on social media based on category. We are restricting to Fashion as a category for the project and displaying Ranking/scoring logic for trends extracted. This project is made in accordance with Option 1 in Deliverable 1.

After breaking the overall problem into sub problems, we get :

Get a list of trending keywords from the internet.
Select only those keywords that are creating a lot of buzz on social media.
Calculate trending scores of these selected keywords.
Get sample links from which the trend is derived.
Get sample images related to the keyword.
Get flipkart products related to the keyword.

1. Get a list of trending keywords from the internet.
We are using google trends to tackle this sub problem. Using google trends, we can get the trending keywords present in queries searched on the Google website. We can access Google Trends data in python using Pytrends API. We are filtering results by Shopping category, Fashion sub-category and Location as India.

2. Select only those keywords that are creating a lot of buzz on social media.
Twitter has a lot of textual content, so we're relying on it to check whether these selected keywords are creating buzz on twitter or not. We are using Tweepy API to do this.

3. Calculate trending scores of these selected keywords.
We can calculate the trending score by storing number of tweets posted in the last one week, containing our trending keyword. We have sorted the keywords based on this count and have returned the result as a dictionary.

4. Get sample links from which the trend is derived.
We can search the recent tweets containing our keyword using Tweepy and get the id of these tweets, using this id we have constructed the URL of the tweet.

5. Get sample images related to the keyword.
To get the sample images, we're taking the help of icrawler, an API that's used to scrap Google Images. We're searching for related images on google images site and downloading these images into seperate folders - trend 1, trend 2....trend n. We'll use these images on our web portal.

6. Get flipkart products related to the keyword.
We're using the Flipkart scraper API to scrape search results and product details from Flipkart. We'll use our found keywords, search them on Flipkart using the API and get the  product name and url. We'll display these details on our web portal and users can directly go to Flipkart from these links.

Result :

![image](https://user-images.githubusercontent.com/65012840/182058759-a8658a2e-176d-4cb8-85b0-eade9cefe14a.png)

![image](https://user-images.githubusercontent.com/65012840/182058845-3d4ebd68-867f-4127-ab80-8f3d0e22cc10.png)


Steps to run the project :

1. Install all the required libraries
2. Run the main.py file
3. Open the web portal in a browser, use some software like XAMPP to open the PHP file.
