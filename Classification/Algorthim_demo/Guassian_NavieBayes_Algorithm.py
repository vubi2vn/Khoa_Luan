import math
import re

class NaiveBayes(object):
    def __init__(self,features_train=None, labels_train=None, features_test=None, labels_test=None):
        self.features_train = features_train
        self.features_test = features_test
        self.labels_train = labels_train
        self.labels_test = labels_test


    #Tính giá trị trung bình của 1 thuộc tính
    def mean (self,numbers):
        return sum(numbers)/float(len(numbers))

    #Độ lệch chuẩn cho mỗi thuộc tính
    def standard_deviation(self,number):
        avg=self.mean(number)
        variance=sum([pow(x-avg,2) for x in number])/ float(len(number) -1)
        return math.sqrt(variance)



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

    #Xác suất cho mỗi thuọc tính theo class
    def Attribute_rate(self,column, value):
        result=[]
        numbers=[]
        count_features=len(self.features_train)
        classes = self.get_class(self.labels_train)
        num_of_class = len(classes)
        for i in range(num_of_class):
            numbers.append([])
        for i in range(count_features):
            numbers[classes.index(self.labels_train[i])].append(features_train[i][column])
        for i in range(num_of_class):
            mean=self.mean(numbers[i])
            stdev=self.standard_deviation(numbers[i])
            exponent= math.exp(-(math.pow(value-mean,2)/(2*math.pow(stdev,2))))
            result.append((1/math.sqrt(2*math.pi)*stdev)*exponent)
        return result


    def Bayes_train(self, vector):
        attribute=self.get_attributes(self.features_train)
        num_of_attributes=len(attribute)
        classes=self.get_class(self.labels_train)
        num_of_class = len(classes)
        if len(vector)!=num_of_class:
            return -1
        result=[]
        for i in range(num_of_class):
            rate=1
            for j in range(num_of_attributes):
                r=self.Attribute_rate(j,vector[j])[i]
                rate = rate * r
            result.append(rate)
        return classes[result.index(max(result))]

    def real_label(self):
        real_label=[]
        for i in self.features_test:
            real_label.append(self.Bayes_train(i))
        return real_label
    def calculate_precision(self,classes):
        tp=0
        real_label=self.real_label()
        count_vector_in_class=0
        for i in range(len(self.labels_test)):
            if label_test[i]==classes:
                if label_test[i]==real_label[i]:
                    tp+=1
        for i in real_label:
            if i==classes:
                count_vector_in_class+=1
        return tp/count_vector_in_class

    def calculate_recall(self,classes):
        tp = 0
        real_label = self.real_label()
        count_vector_in_class = 0
        for i in range(len(self.labels_test)):
            if label_test[i] == classes:
                if label_test[i] == real_label[i]:
                    tp += 1
                count_vector_in_class += 1
        return tp / count_vector_in_class

    def result_report(self):
        classes = self.get_class(label_train)
        print('\t Precision \t\t recall \t\t f-score')
        avg_f_score=0
        for i in range(len(classes)):
            precision=self.calculate_precision(classes[i])
            recall=self.calculate_recall(classes[i])
            f_score=(2*precision*recall)/(precision+recall)
            print(str(classes[i])+'\t '+str(round(precision,2))+'\t\t\t'
                  +str(round(recall,2))+'\t\t\t'+ str(round(f_score,2)))
            avg_f_score+=(f_score/len(classes))
        print('avg\t\t\t\t\t\t\t\t\t'+str(round(avg_f_score,2)))


if __name__=='__main__':
    features_train = []
    label_train = []
    features_test = []
    label_test = []
    file_train = open(r'C:\Users\QuocDai\Desktop\Khóa luận\Classification\Training\Vector_traning.txt', 'r',
                      encoding='UTF-8')
    file_test = open(r'C:\Users\QuocDai\Desktop\Khóa luận\Classification\Test_data\Result_1000_Vector.txt', 'r',
                     encoding='UTF-8')
    for line in file_train:
        a = re.sub('[()\n]', '', line).split(',')
        a[0] = float(a[0])
        a[1] = float(a[1])
        a[2] = float(a[2])
        features_train.append([a[0], a[1]])
        label_train.append(a[2])
    for line in file_test:
        a = re.sub('[\n]', '', line).split(',')
        a[0] = float(a[0])
        a[1] = float(a[1])
        a[2]=float(a[2])
        features_test.append([a[0],a[1]])
        label_test.append(a[2])


    algorthim = NaiveBayes(features_train=features_train,labels_train=label_train, features_test=features_test,labels_test=label_test)
    print(algorthim.real_label())
    algorthim.result_report()



