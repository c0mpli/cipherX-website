
##This code contains all the functions that interact with the firebase database

from pyrebase import pyrebase

firebaseConfig = {
  "apiKey": "AIzaSyBwAprOAtYVPb3G11tthzYFFFMwc5_SZN4",
  "authDomain": "dummystocks-1424b.firebaseapp.com",
  "databaseURL": "https://dummystocks-1424b-default-rtdb.asia-southeast1.firebasedatabase.app",
  "projectId": "dummystocks-1424b",
  "storageBucket": "dummystocks-1424b.appspot.com",
  "messagingSenderId": "318536225355",
  "appId": "1:318536225355:web:5e23a094990609c1f733ce",
  "measurementId": "G-TCVBGSR5BC"
}


def create(grpname,name,price,movement,percentage):
   
    firebase = pyrebase.initialize_app(firebaseConfig)
    database = firebase.database()
    data = {
           
                "name":name,
                "price":price,
                "movement":movement,
                "percentage":percentage
            

        
    }
    database.child(grpname).set(data)

def update(grpname,price,movement,percentage):
       
    firebase = pyrebase.initialize_app(firebaseConfig)
    database = firebase.database()
    database.child(grpname).update({"price":price})
    database.child(grpname).update({"movement":movement})
    database.child(grpname).update({"percentage":percentage})



   