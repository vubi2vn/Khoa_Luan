
import re

class NaiveBayes(object):
    def __init__(self,features_train=None, labels_train=None, features_test=None, labels_test=None):
        self.features_train = features_train
        self.features_test = features_test
        self.labels_train = labels_train
        self.labels_test = labels_test


    # Tìm số lớp
    def get_class(self, array_labels):
        l = []
        for i in array_labels:
            if len(l) == 0:
                l.append(i)
            flag = 0
            for j in l:
                if i == j:
                    flag = 1
                    break
            if flag == 0:
                l.append(i)
        l.sort()
        return l

    # Tìm các loại thuộc tính của vector đặc trưng
    def get_attributes(self,array_features):
        attr=[]
        num_of_attr=len(self.get_class(self.labels_train))
        for i in range(num_of_attr):
            attr.append([])
        for i in array_features:
            for j in range(num_of_attr):
                if len(attr[j]) == 0:
                    attr[j].append(i[j])
                flag = 0
                for a in attr[j]:
                    if a== i[j]:
                        flag = 1
                        break
                if flag==0:
                    attr[j].append(i[j])
                    attr[j].sort()
        attr.sort()
        return attr

    #Đếm vector mỗi lớp
    def Count_class_vector(self):
        result= []
        classes = self.get_class(self.labels_train)
        num_of_class= len(classes)
        for i in range(num_of_class):
            result.append(0)
        for i in self.labels_train:
            for j in range(num_of_class):
                if i==classes[j]:
                    result[j] = result[j]+ 1
        return result

    #Tinh ty le một thuộc tính xác định
    def Attribute_rate(self,column, value):
        result=[]
        ind=-1
        countClass=self.Count_class_vector()
        classes = self.get_class(self.labels_train)
        num_of_class = len(classes)
        for i in range(num_of_class):
            result.append(0)
        for j in self.features_train:
            ind= ind+1
            if j[column]==value:
                index=classes.index(self.labels_train[ind])
                result[index] = result[index]+1
        for i in range(num_of_class):
            result[i] = result[i]/countClass[i]
        return result


    def Bayes_train(self, vector):
        count_vector = len(self.labels_train)
        attribute=self.get_attributes(self.features_train)
        num_of_attributes=len(attribute)
        classes=self.get_class(self.labels_train)
        num_of_class = len(classes)
        countClass= self.Count_class_vector()
        if len(vector)!=num_of_class:
            return -1
        result=[]
        for i in range(num_of_class):
            rate=1
            for j in range(num_of_attributes):
                r=self.Attribute_rate(j,vector[j])[i]
                rate = rate * r
            rate = rate * (countClass[i]/count_vector)
            result.append(rate)
        return classes[result.index(max(result))]

    def compare_result(self):
        label_real=[]
        for i in self.features_test:
            label_real.append(self.Bayes_train(i))
        return label_real


if __name__=='__main__':
    features_train = []
    label_train = []
    features_test = []
    label_test = []
    file_train = open(r'C:\Users\QuocDai\Desktop\Khóa luận\Classification\Training\Vector_traning.txt', 'r',
                      encoding='UTF-8')
    for line in file_train:
        a = re.sub('[()\n]', '', line).split(',')
        a[0] = float(a[0])
        a[1] = float(a[1])
        a[2] = float(a[2])
        features_train.append([a[0], a[1]])
        label_train.append(a[2])
        features_test.append([a[0], a[1]])
        label_test.append(a[2])


    algorthim = NaiveBayes(features_train=features_train,labels_train=label_train, features_test=features_test,labels_test=label_test)
    print(algorthim.compare_result())



