from sklearn.metrics import classification_report
from sklearn.svm import LinearSVC
import re
import csv
import joblib
import sys


class SVMmodel(object):
    def __init__(self ,vector=None):
        urlModel=r'C:\xampp\htdocs\demo\train.joblib'
        self.vector = vector
        self.model=joblib.load(urlModel)

    def testing(self):
        vector_array=[]
        vector_array.append(self.vector)
        pred_y=self.model.predict(vector_array)
        if(pred_y[0]==1):
            return 1
        else:
            return 0


if __name__=='__main__':
    x=sys.argv[1]
    y=sys.argv[2]
    svm=SVMmodel(vector=[x,y])
    print(svm.testing())






