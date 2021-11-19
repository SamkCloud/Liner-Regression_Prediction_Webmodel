import pandas as pd
import numpy as np
import sklearn.linear_model as lm
import sys
import warnings
warnings.simplefilter("ignore")

study_time = int(sys.argv[1])
std_list = []
std_list.append(study_time)

df = pd.read_csv("C:\\wamp\\www\\webModel\\Grade_Set_1.csv")

X = df.Hours_Studied[:,np.newaxis]
Y = df.Test_Grade.values

lr = lm.LinearRegression()

lr.fit(X,Y)

Y_pred = lr.predict(np.transpose([std_list]))

print ("Student who studies for ",study_time,"hrs will going to score", Y_pred[0],"marks")




