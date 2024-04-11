import streamlit as st
import time as t
st.image("nice.png") 
#function of streamlit
# {1} title {2} code {3} header {4} latex {5} caption {6} markdown {7} subheader.

st.title("SUSHANT GURU!")

st.header("Machine Learning")

st.subheader("Linear Regression")

st.info("lorem is a very nice as well as good persion ")

st.warning("Come fast to give product's")

st.write("Student Name:- ")
st.write(range(100))

st.error("wrong password")

st.success("A*")

st.markdown("sushant")
st.markdown("# sushant")
st.markdown("## sushant")
st.markdown("### sushant")
st. markdown(":moon:")

st.caption("Guru.io")

st.latex(r'''a+b x^2+c ''')


#input widgets
# {1} checkbox {2} slider {3} button {4} radio {5} selectbox {6} time_input.

st.checkbox("LOGIN")
st.slider("Ram")
st.button("Jai Shri Ram")
st.radio("gender", ["male", "female"])
st.selectbox("course", ["ML","pythonn","cybersecurity"])
st.multiselect("choose dept:",["content", "makating","sele's"])
st.select_slider("rating", ["g","dd","sA","vb"])
st.slider("setlect:-",0,39)
st.number_input("Enter a number:-",0,100)
st.text_input("Enter your email:-")
st.date_input("Enter today date:")
#st.camera_input("Nice Web Cam:")
st.time_input("Hi Ka timing hai:")
st.text_area("Enter our opinion:-")
st.file_uploader("tera bhai:- ")
st.file_uploader("upload kar:-")
st.color_picker("click our colour:-")
st.progress(57)
# page loader
# with st.spinner("just waiting"):
#     t.sleep(3)
#balloons animation
st.balloons()
# side title
st.sidebar.title("welcome to our Sushant Guru")
st.sidebar.text_input("Email:-")
st.sidebar.text_input("Password:-")
st.sidebar.button("Submit")



# Data visualization
import pandas as pd
import numpy as np
st.title("It's Bar Chart:-")
data = pd.DataFrame(np.random.randn(5,2), columns=["x","y"])
st.bar_chart(data)

st.title("It's Line Chart:-")
st.line_chart(data)

st.title("It's Video's:-")
st.video("video.mp4")
st.area_chart(data)