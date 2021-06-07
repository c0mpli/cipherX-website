

## This code is meant to be run only once to insert the fixed values into the firebase database

## DO NOT RUN THIS CODE!

from selenium import webdriver
from dbHandler import create

option = webdriver.ChromeOptions()
option.add_argument('headless')
browser = webdriver.Chrome('C:\\Users\Jash\Downloads\chromedriver_win32\chromedriver.exe',options=option)

f= open("C:\\Users\Jash\Stocki\Stocki\stocks\stocknames.txt",'r')
c = 0

for line in f: #automated entries
    shortname = line
    url = "https://www.google.com/search?q=NSE:"+shortname
    browser.get(url)
    price = browser.find_element_by_xpath("/html/body/div[7]/div/div[9]/div[1]/div/div[2]/div[2]/div/div/div[1]/div/div/div/div/g-card-section/div/g-card-section/div[2]/div[1]/span[1]/span/span[1]").text
    price = price.replace(",",'')
    price = float(price)
    fullname = browser.find_element_by_xpath("/html/body/div[7]/div/div[9]/div[1]/div/div[2]/div[2]/div/div/div[1]/div/div/div/div/g-card-section/div/g-card-section/div[1]/div/div").text
    movement = browser.find_element_by_xpath("/html/body/div[7]/div/div[9]/div[1]/div/div[2]/div[2]/div/div/div[1]/div/div/div/div/g-card-section/div/g-card-section/div[2]/div[1]/span[2]/span[1]").text 
    movement = movement.replace(",","")
    percentage = browser.find_element_by_xpath("/html/body/div[7]/div/div[9]/div[1]/div/div[2]/div[2]/div/div/div[1]/div/div/div/div/g-card-section/div/g-card-section/div[2]/div[1]/span[2]/span[2]/span[1]").text
    percentage = percentage.replace("(","")
    percentage = percentage.replace(")","")
    
    create(shortname.rstrip("\n"),fullname,price,movement,percentage)
    c = c+1
    print(c)
f.close()
browser.quit()



