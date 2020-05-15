
import csv
import math

#Tách các câu thành 1 mảng từ không trùng
def TachTu_khongtrung(file, array):
    for line in file:
        fileds = line.split()
        for i in fileds:
            flag = 0
            for a in array:
                if(a==i):
                    flag=1
                    break
            if(flag==0 and i!='\n'):
                array.append(i)

# tách các câu thành mảng từ có trùng
def TachTu_cotrung(file,array):
    for line in file:
        fileds = line.split()
        for i in fileds:
            array.append(i)

#Tính các giá trị số lần xuất hiện, điểm số
def TinhGiaTriTheoTF (word, array_pos, array_neg):
    tf_pos= 0
    tf_neg=0
    score_pos=0
    score_neg=0
    idf=0
    for i in array_pos:
        if(i==word):
            tf_pos = tf_pos+1
    for i in array_neg:
        if(i== word):
            tf_neg = tf_neg+1
    if(tf_pos>0):
        score_pos = 1 + math.log2(tf_pos)
    if(tf_neg>0):
        score_neg = 1 + math.log2(tf_neg)
    if(tf_neg>0 and tf_pos>0):
        idf = math.log10(2/2)
    else:
        idf=math.log10(2)
    return tf_pos,tf_neg,score_pos,score_neg,idf



if __name__ == '__main__':
    #Đọc file
    file_nega = open(r'C:\Users\QuocDai\Desktop\Khóa luận\Classification\Data\Result_negative.txt', 'r', encoding='UTF-8')
    file_pos = open(r'C:\Users\QuocDai\Desktop\Khóa luận\Classification\Data\Result_positive.txt', 'r', encoding='UTF-8')


    comment_all=[]
    comment_pos=[]
    comment_neg=[]
    array_all =[]
    array_pos=[]
    array_neg=[]
    count=0

    # Nối dữ liệu của 2 file
    #Trộn khoảng 100 bình luận mỗi loại
    for m in file_pos:
        if count < 139:
            comment_all.append(m)
            comment_pos.append(m)
        count=count+1
    count=0
    for n in file_nega:
        if count < 140 :
            comment_all.append(n)
            comment_neg.append(n)
        count = count + 1

    #Tách từ
    TachTu_khongtrung(comment_all, array_all)
    TachTu_cotrung(comment_pos, array_pos)
    TachTu_cotrung(comment_neg, array_neg)

    #Ghi file CSV
    with open(r'C:\Users\QuocDai\Desktop\Khóa luận\Classification\Data\CalculateTF.csv','w',encoding="utf-8",newline='') as csv_file:
        writer = csv.writer(csv_file,delimiter=',', quotechar='"', quoting=csv.QUOTE_MINIMAL)
        writer.writerow(['Word','tf_pos','tf_neg','score_pos','score_neg','idf'])
        #Tính các giá trị của từng chữ và ghi lại
        for word in array_all:
            row =[word]
            row.append(TinhGiaTriTheoTF(word,array_pos,array_neg)[0])
            row.append(TinhGiaTriTheoTF(word, array_pos, array_neg)[1])
            row.append(TinhGiaTriTheoTF(word, array_pos, array_neg)[2])
            row.append(TinhGiaTriTheoTF(word, array_pos, array_neg)[3])
            row.append(TinhGiaTriTheoTF(word, array_pos, array_neg)[4])
            writer.writerow(row)


    csv_file.close()
    file_pos.close()
    file_nega.close()




