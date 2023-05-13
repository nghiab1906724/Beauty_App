import pandas
import matplotlib.pyplot as plt
import numpy
import seaborn
from sklearn import tree
from sklearn.tree import DecisionTreeClassifier
from sklearn.model_selection import train_test_split
from sklearn.metrics import confusion_matrix
from sklearn.preprocessing import LabelEncoder

import json
import sys

df = pandas.read_csv("resources\Python\loai_da.csv")
x=df.drop('loai_da', axis='columns')
d = {'nhaycam': 5, 'mun': 6, 'sacto' : 7, 'laohoa' : 8, 'dau' : 3, 'thuong' : 2, 'honhop' : 4}
y=df['loai_da'].map(d)

dtree = DecisionTreeClassifier()
dtree = dtree.fit(x, y)

# Lấy chuỗi JSON từ đối số được truyền vào khi gọi tệp Python
json_array = sys.argv[1]

# Chuyển đổi chuỗi JSON thành một đối tượng Python có thể xử lý được
my_array = json.loads(json_array)

y_pred=dtree.predict([my_array])
print(y_pred)