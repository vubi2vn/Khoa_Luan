from bs4 import BeautifulSoup
import urllib.request

if __name__ == '__main__':
    url = 'https://www.thegioididong.com/dtdd/xiaomi-redmi-note-9s/danh-gia?s=5&p=1'
    page = urllib.request.urlopen(url)
    soup = BeautifulSoup(page, 'html.parser')
    file1= open(r"C:\Users\QuocDai\Desktop\Khóa luận\untitled\data.txt","w",encoding='utf-8')

    new_feeds = soup.find_all(
        'li', class_='par')

    for feed in new_feeds:
        if(feed.find('div', class_='rh').find('label')):
            comment = feed.find('div', class_='rc').find_all('i')[5].get_text().replace('\n','. ')
            print(comment)
            file1.write(comment + "\n\n")
    file1.close()


