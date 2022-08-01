from ast import keyword
from sp123 import Keywords
from sp4 import TweetLink
from sp5 import Images
from sp6 import FlipkartDetails

obj1=Keywords()

# returns trends with scores
drax=obj1.getTrendsWithScores()

keywords=[]
scores=[]
c=0
for i in drax:
    keywords.append(i)
    scores.append(drax[i])
    c+=1
    if c==5:
        break

obj2=TweetLink()

# get tweet links for these keywords
links=obj2.getTweetLinks(keywords)

obj3=Images()

# download related images
obj3.DownloadImages(keywords)

obj4=FlipkartDetails()

# get related flipkart products
flipprods=[]
for i in keywords:
    # 3 products for each keyword
    temp=obj4.getProducts(i)
    flipprods.append(temp)

# save the data in a text file
c=0
while(c<5):
    filename="sample"+str(c+1)+".txt"
    file = open(filename, "w")

    file.write(keywords[c])
    file.write("\n")

    file.write(str(scores[c]))
    file.write("\n")

    for j in range(len(links[c])):
        file.write(links[c][j])
        file.write("\n")
    for k in range(3-len(links[c])):
        file.write("https://twitter.com/login")
        file.write("\n")

    for y in range(len(flipprods[c])):
        file.write(flipprods[c][y][0])
        file.write("\n")
        file.write(flipprods[c][y][1])
        file.write("\n")

    file.close()
    c+=1


