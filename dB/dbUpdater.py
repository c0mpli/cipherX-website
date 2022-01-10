
## This code is meant to be run 24x7 as it updates the price of the stocks in realtime. Can turn this code off once the market working hours are over.

from selenium import webdriver
from dbHandler import update
import time


options = webdriver.ChromeOptions()
options.add_argument('headless')
options.add_argument("--user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36")
options.add_experimental_option ('excludeSwitches', ['enable-logging'])
browser = webdriver.Chrome('D:\\Users\Stephen\Dev\Git\Python\chromedriver.exe',options=options)

c=0

f= open("dB\\names.txt",'r')

for line in f: #automated updates
    site_name = line
    browser.get("https://coinmarketcap.com/currencies/"+site_name)
    time.sleep(2)
    name = browser.find_element_by_xpath('//*[@id="__next"]/div[1]/div/div[2]/div/div[1]/div[2]/div/div[1]/div[1]/h2').text
    price = browser.find_element_by_xpath('//*[@id="__next"]/div[1]/div/div[2]/div/div[1]/div[2]/div/div[2]/div[1]/div').text
    price = price.replace(' ','')
    price = price.replace('USD','')
    price = price.replace(',','')
    price = price.replace('$','')
    perc = browser.find_element_by_xpath('//*[@id="__next"]/div[1]/div/div[2]/div/div[1]/div[2]/div/div[2]/div[1]/span').text
    shrt_name = name.split()[1]
    name = name.split()[0]
    c = c+1
    
    update(c,price,perc)
    #print(c, name, shrt_name, price, perc)
    
            
f.close()
browser.quit()








