from sklearn.metrics import classification_report
from sklearn.svm import LinearSVC
import re
import csv
import joblib

def changeToVector(string):
    with open(r'C:\Users\QuocDai\Desktop\Khóa luận\Classification\Data\CalculateTF.csv','r',encoding="utf-8") as csv_file:
        data = csv.reader(csv_file)
        word_array=string.split()
        score_pos=0
        score_neg=0
        score_pos_1=0
        score_neg_1=0
        for word in word_array:
            if word!='\n':
                for da in data:
                    if word == da[0]:
                        score_pos_1=score_pos_1+float(da[3])
                        score_neg_1=score_neg_1+float(da[4])
                        if float(da[5])>0:
                            score_neg=score_neg+float(da[4])
                            score_pos=score_pos+float(da[3])
                        break
            csv_file.seek(0,0)
        x=0
        if score_pos>score_neg:
            x=1
        else:
            if score_pos<score_neg:
                x=2
        y = 0
        if score_pos_1 > score_neg_1:
            y = 1
        else:
            if score_pos_1 < score_neg_1:
                y = 2
        return [x,y]

class SVMmodel(object):
    def __init__(self,urlModel=None ,stringTest=None):
        self.stringTest = stringTest
        self.model=joblib.load(urlModel)

    def testing(self):
        vector=changeToVector(self.stringTest)
        vector_array=[]
        vector_array.append(vector)
        pred_y=self.model.predict(vector_array)
        if(pred_y[0]==1):
            print('Câu bình luận "'+self.stringTest+'" thuộc lớp tích cực.')
        else:
            print('Câu bình luận "'+self.stringTest+'" thuộc lớp tiêu cực')


if __name__=='__main__':
    string = 'Tương đối tốt, nói chung pin nhanh hết so với con A70 của mình mua trước đó, phím tăng giảm âm lượng bấm hơi cứng,'
    svm=SVMmodel(urlModel=r'C:\Users\QuocDai\Desktop\Khóa luận\Classification\Train\train.joblib',stringTest=string)
    svm.testing()






