import csv

if __name__ == '__main__':

    comment_all = []

    #Đọc file
    file_nega = open(r'C:\Users\QuocDai\Desktop\Khóa luận\Classification\Draw_data\1500_negative.txt', 'r',
                     encoding='UTF-8')
    file_pos = open(r'C:\Users\QuocDai\Desktop\Khóa luận\Classification\Draw_data\1500_positive.txt', 'r',
                    encoding='UTF-8')
    file_result_vector = open(r'C:\Users\QuocDai\Desktop\Khóa luận\Classification\Test_data\Result_30000_Vector.txt', 'w',
                    encoding='UTF-8')


    # Nối dữ liệu của 2 file
    count_pos=0
    for m in file_pos:
        comment_all.append(m)
        count_pos=count_pos+1
    count=0
    for n in file_nega:
        comment_all.append(n)

    #Đọc file csv
    with open(r'C:\Users\QuocDai\Desktop\Khóa luận\Classification\Training\CalculateTF.csv','r',encoding="utf-8") as csv_file:
        data = csv.reader(csv_file)
        count_comment = 1
        for comment in comment_all:
            emotion=1

            # 100 comment đầu là tích cực (emtion =1) qua 100 comment đầu thì emotion =2 là tiêu cực
            if count_pos <= 0:
                emotion=2
            array_word=comment.split()
            score_pos_1=0
            score_neg_1=0
            score_pos=0
            score_neg=0
            flag=0
            for i in array_word:
                if(i!='\n'):
                    for da in data:
                        if(i==da[0]):
                            score_neg_1=score_neg_1+float(da[4])
                            score_pos_1=score_pos_1+float(da[3])
                            if(float(da[5])>0):
                                score_pos=score_pos+float(da[3])
                                score_neg=score_neg+float(da[4])
                            flag=1
                            break
                if flag==1:
                    csv_file.seek(0, 0)
                    flag=0
            x_vector=0
            y_vector=0
            if(score_neg>score_pos):
                x_vector='2'
            else:
                if(score_pos>score_neg):
                    x_vector='1'
                else:
                    x_vector='0'
            if (score_neg_1 > score_pos_1):
                y_vector = '2'
            else:
                if (score_pos_1 > score_neg_1):
                    y_vector = '1'
                else:
                    y_vector = '0'
            file_result_vector.write(x_vector+','+y_vector+','+str(emotion)+'\n')
            count_comment=count_comment+1
            count_pos=count_pos-1
            csv_file.seek(0, 0)

    file_result_vector.close()
    file_nega.close()
    file_pos.close()
    csv_file.close()
