from array import array

from bs4 import BeautifulSoup
import urllib.request

if __name__ == '__main__':
    url = 'https://www.thegioididong.com/dtdd/samsung-galaxy-a51/danh-gia?s=1&p=1'
    page = urllib.request.urlopen(url)
    soup = BeautifulSoup(page, 'html.parser')
    file1= open(r"D:\GITHUB\Khoa_Luan\Classification\Draw_data\TieuCuc_00.txt","a",encoding='utf-8')
    arr_comments=[]
    comments=[]

    new_feeds = soup.find_all(
        'li', class_='par')

    for feed in new_feeds:
        if(feed.find('div', class_='rh').find('label')):
            comment = feed.find('div', class_='rc').find_all('i')[5].get_text().replace('?','. ')
            comments.append(comment)
    for string in comments:
        comment=string.split('.')
        if arr_comments==[]:
            for i in comment:
                arr_comments.append(i)
        else:
            flag=0
            for i in arr_comments:
                for j in comment:
                    if i==j:
                        flag=1
                        break
            if flag==0:
                for j in comment:
                    arr_comments.append(j)

    count=0
    for i in arr_comments:
        print(i)
        file1.write(i.strip()+'\n')
        count+=1
    file1.close()
    print(str(count)+' câu')


