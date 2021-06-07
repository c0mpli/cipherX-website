
##This code contains all the functions that interact with the firebase database

from pyrebase import pyrebase

firebaseConfig = {
  "apiKey": "AIzaSyDUldARRvm9et4hhkpHAo6IzRxuobwvoTc",
  "authDomain": "stocki-startup.firebaseapp.com",
  "databaseURL": "https://stocki-startup-default-rtdb.asia-southeast1.firebasedatabase.app",
  "projectId": "stocki-startup",
  "storageBucket": "stocki-startup.appspot.com",
  "messagingSenderId": "726351274602",
  "appId": "1:726351274602:web:1c10aafc51fd103c7e6013",
  "measurementId": "G-67Y7RBS6BV"
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



   