from sklearn.metrics import classification_report
from sklearn.naive_bayes import GaussianNB
import re
class Classifier(object):
    def __init__(self, features_train=None, labels_train=None, features_test=None, labels_test=None):
        self.features_train = features_train
        self.features_test = features_test
        self.labels_train = labels_train
        self.labels_test = labels_test
        self.model = GaussianNB()

    def training(self):
        self.model.fit(self.features_train, self.labels_train)
        self.__training_result()

    def __training_result(self):
        y_true, y_pred = self.labels_test, self.model.predict(self.features_test)
        print(y_pred)
        print(classification_report(y_true, y_pred))
if __name__ == '__main__':
    features_train =[]
    label_train=[]
    features_test=[]
    label_test=[]
    file_train=open(r'D:\GITHUB\Khoa_Luan\Classification\Training\Vector_traning.txt', 'r',
                     encoding='UTF-8')
    file_test=open(r'D:\GITHUB\Khoa_Luan\Classification\Test_data\Result_30000_Vector.txt', 'r',
                     encoding='UTF-8')
    for line in file_train:
        a=re.sub('[()\n]','',line).split(',')
        a[0]=float(a[0])
        a[1]=float(a[1])
        a[2] = float(a[2])
        features_train.append([a[0],a[1]])
        label_train.append(a[2])
    for line in file_test:
        a = re.sub('[\n]', '', line).split(',')
        a[0] = float(a[0])
        a[1] = float(a[1])
        a[2]=float(a[2])
        features_test.append([a[0],a[1]])
        label_test.append(a[2])
    est=Classifier(features_train=features_train,labels_train=label_train, features_test=features_test,labels_test=label_test)
    est.training()
