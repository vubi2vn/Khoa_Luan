import numpy as np
from cvxopt import matrix, solvers
import re

def check_exsist(value, array):
    for i in array:
        if i==value:
            return True
    return False

def PT_duong_thang(A,B):
    v_AB=[B[0]-A[0],B[1]-A[1]]
    v_n=[-v_AB[1],v_AB[0]]
    a=v_n[0]
    b=v_n[1]
    c=v_n[0]*(-A[0])+v_n[1]*(-A[1])
    return a,b,c
def Tap_hop_pt_duong_thang(array_point):
    th=[]
    for i in range(len(array_point)-1):
        th.append(PT_duong_thang(array_point[i],array_point[i+1]))
    return th
class SVM(object):
    def __init__(self,features_train=None, labels_train=None, features_test=None, labels_test=None):
        self.features_train = features_train
        self.features_test = features_test
        self.labels_train = labels_train
        self.labels_test = labels_test


    def calculate_w_b(self):
        np.random.seed(22)
        features_train=[[],[]]
        label_train=self.labels_train
        for i in range(len(label_train)):
            if label_train[i]==1:
                if len(features_train[0])==0:
                    features_train[0].append(self.features_train[i])
                if not(check_exsist(self.features_train[i],features_train[0])):
                    features_train[0].append(self.features_train[i])
            else:
                if len(features_train[1]) == 0:
                    features_train[1].append(self.features_train[i])
                if not (check_exsist(self.features_train[i], features_train[1])):
                    features_train[1].append(self.features_train[i])
        N = 0
        if len(features_train[0])>len(features_train[1]):
            N=len(features_train[1])
            remove_values=[]
            for i in features_train[0]:
                th=Tap_hop_pt_duong_thang(features_train[1])
                for j in th:
                    j=list(j)
                    if(float(j[0])*float(i[0])+float(j[1])*float(i[1])+float(j[2])==0):
                        remove_values.append(i)
            for i in remove_values:
                features_train[0].remove(i)
        else:
            if len(features_train[0])<len(features_train[1]):
                N=len(features_train[0])
                remove_values = []
                for i in features_train[1]:
                    th = Tap_hop_pt_duong_thang(features_train[0])
                    for j in th:
                        j = list(j)
                        if (float(j[0]) * float(i[0]) + float(j[1]) * float(i[1]) + float(j[2]) == 0):
                            remove_values.append(i)
                for i in remove_values:
                    features_train[1].remove(i)
            else:
                N = len(features_train[1])
        X0 = np.array(features_train[0])  # class 1
        X1 = np.array(features_train[1])

        X = np.concatenate((X0.T,X1.T), axis=1)  # all data
        y = np.concatenate((np.ones((1, N)), -1 * np.ones((1, N))), axis=1)  # labels
        V = np.concatenate((X0.T, -X1.T), axis=1)
        K = matrix(V.T.dot(V))  # see definition of V, K near eq (8)

        p = matrix(-np.ones((2 * N, 1)))  # all-one vector
        # build A, b, G, h
        G = matrix(-np.eye(2 * N))  # for all lambda_n >= 0
        h = matrix(np.zeros((2 * N, 1)))
        A = matrix(y)  # the equality constrain is actually y^T lambda = 0
        b = matrix(np.zeros((1, 1)))
        solvers.options['show_progress'] = False
        sol = solvers.qp(K, p, G, h, A, b)

        l = np.array(sol['x'])
        epsilon = 1e-6  # just a small number, greater than 1e-9
        S = np.where(l > epsilon)[0]

        VS = V[:, S]
        XS = X[:, S]
        yS = y[:, S]
        lS = l[S]
        # calculate w and b
        w = VS.dot(lS)
        b = np.mean(yS.T - w.T.dot(XS))
        return w.T,b

    def SVM_train(self,vector):
        w0,b=self.calculate_w_b()
        w = w0.tolist()[0]
        if len(vector)!=len(w):
            print('Vector không đúng, hãy kiểm tra lại!')
            return -1
        result = w[0]*vector[0]+w[1]*vector[1]+b
        if result<0:
            return 2
        else:
            return 1

    def real_label(self):
        real_label=[]
        for i in self.features_test:
            real_label.append(self.SVM_train(i))
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
        classes = [1,2]
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
    file_train = open(r'D:\GITHUB\Khoa_Luan\Classification\Training\Vector_traning.txt', 'r',
                      encoding='UTF-8')
    file_test = open(r'D:\GITHUB\Khoa_Luan\Classification\Test_data\Result_30000_Vector.txt', 'r',
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


    algorthim = SVM(features_train=features_train,labels_train=label_train, features_test=features_test,labels_test=label_test)
    print(algorthim.real_label())
    algorthim.result_report()



