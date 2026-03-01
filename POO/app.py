import streamlit as st

st.title("Aplikasi Turunan Parsial")

x = st.number_input("Masukkan nilai x")
y = st.number_input("Masukkan nilai y")

hasil = x**2 + y**2

st.write("Hasil =", hasil)