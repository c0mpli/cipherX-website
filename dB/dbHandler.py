
##This code contains all the functions that interact with the firebase database

from pyrebase import pyrebase

firebaseConfig = {
  "apiKey": "AIzaSyDoocTiTnn_k9Ige_yhj3vv2v0ddRjxbT0",
  "authDomain": "cipherx-b081d.firebaseapp.com",
  "databaseURL": "https://cipherx-b081d-default-rtdb.asia-southeast1.firebasedatabase.app/",
  "projectId": "cipherx-b081d",
  "storageBucket": "cipherx-b081d.appspot.com",
  "messagingSenderId": "756874857947",
  "appId": "1:756874857947:web:156d1302b476f1c891ebfe",
  "measurementId": "G-CFLNNQXN3S"
}


def create(c,name,shrt_name,price,perc):
   
    firebase = pyrebase.initialize_app(firebaseConfig)
    database = firebase.database()
    data = {
                
                "name":name,
                "shortname":shrt_name,
                "price":price,
                "percentage":perc,
    }
    database.child('CCs').child(c).set(data)

def update(c,price,perc):
       
    firebase = pyrebase.initialize_app(firebaseConfig)
    database = firebase.database()
    database.child('CCs').child(c).update({"price":price})
    database.child('CCs').child(c).update({"percentage":perc})

  