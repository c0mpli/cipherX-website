## This code is meant to be run only once to insert the fixed values into the firebase database

## DO NOT RUN THIS CODE!

from selenium import webdriver
from dbHandler import create
import time

options = webdriver.ChromeOptions()
options.add_argument('headless')
options.add_argument("--user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36")
options.add_experimental_option ('excludeSwitches', ['enable-logging'])
#driver
browser = webdriver.Chrome('D:\\Users\Stephen\Dev\Git\Python\chromedriver.exe',options=options)
#driver

def insert():
    
    #always use own file path for names.txt for script execute
    f= open("dB\\names.txt",'r')
    c = 0
    
    for line in f: #automated updates
        site_name = line
        browser.get("https://coinmarketcap.com/currencies/"+site_name)
        time.sleep(1)
        name = browser.find_element_by_xpath('//*[@id="__next"]/div[1]/div/div[2]/div/div[1]/div[2]/div/div[1]/div[1]/h2').text
        price = browser.find_element_by_xpath('//*[@id="__next"]/div[1]/div/div[2]/div/div[1]/div[2]/div/div[2]/div[1]/div').text
        price = price.replace(' ','')
        price = price.replace('USD','')
        price = price.replace(',','')
        price = price.replace('$','')
        perc = browser.find_element_by_xpath('//*[@id="__next"]/div[1]/div/div[2]/div/div[1]/div[2]/div/div[2]/div[1]/span').text
        
        shrt_name = name.split('\n')[1]
        name = name.split('\n')[0]
        c = c+1
        #debug
        #print(shrt_name)
        #print(name)
        #print(price)
        #print(perc)
        #firebase realtime inserter
        create(c,name,shrt_name,price,perc)
        print(c)
    f.close()
    browser.quit()
            


    


insert()

