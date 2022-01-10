// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getDatabase } from "firebase/database";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyDoocTiTnn_k9Ige_yhj3vv2v0ddRjxbT0",
  authDomain: "cipherx-b081d.firebaseapp.com",
  databaseURL: "https://cipherx-b081d-default-rtdb.asia-southeast1.firebasedatabase.app",
  projectId: "cipherx-b081d",
  storageBucket: "cipherx-b081d.appspot.com",
  messagingSenderId: "756874857947",
  appId: "1:756874857947:web:156d1302b476f1c891ebfe",
  measurementId: "G-CFLNNQXN3S"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const database = getDatabase(app);