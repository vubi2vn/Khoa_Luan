import re
def check_grammar(word):
    dic=[['sd','sử dụng'],['dt','điện thoại'],['đt','điện thoại'],['sài','xài'],['nt','nhắn tin'],['sp','sản phẩm'],['j','gì'],
         ['cv','công việc'],['dc','được'],['đc','được'],['dk','được'],['ko','không'],['vs','với'],['bin','pin'],
         ['cx','cũng'],['mik','mình'],['','không'],['xạc','sạc'],['sạt','sạc'],['wed','web'],['lác','lag'],['lắc','lag']
         ,['lát','lag'],['bt','bình thường'],['ms','mới'],['nhìu','nhiều']]
    for i in dic:
        if word==i[0]:
            word=i[1]
            break
    return word

if __name__ == '__main__':

    file_result = open(r"C:\Users\QuocDai\Desktop\Khóa luận\Classification\Draw_data\1500_positive.txt", "w",
                       encoding='utf-8')
    with open(r"C:\Users\QuocDai\Desktop\Khóa luận\Classification\Draw_data\TichCuc_1500.txt","r",encoding='utf-8') as file_source:
        for line in file_source:
            string_a = re.sub('[.,?!"()/%$#@^]','',line).split()
            for a in string_a:
                if a!="\n" and not(a.isdigit()) and a.isalpha():
                    a = check_grammar(a)
                    file_result.write(a.lower() + " ")
            file_result.write("\n")
    file_result_1 = open(r"C:\Users\QuocDai\Desktop\Khóa luận\Classification\Draw_data\1500_negative.txt", "w",
                             encoding='utf-8')
    with open(r"C:\Users\QuocDai\Desktop\Khóa luận\Classification\Draw_data\TieuCuc_1500.txt", "r",
                  encoding='utf-8') as file_source_1:
        for line in file_source_1:
            string_a = re.sub('[.,?!"()/%$#@^]',' ',line).split()
            for a in string_a:
                if a!="\n" and not(a.isdigit()) and a.isalpha():
                    a=check_grammar(a)
                    file_result_1.write(re.sub('\W','',a).lower() + " ")
            file_result_1.write("\n")
    file_source.close()
    file_result.close()
    file_source_1.close()
    file_result_1.close()
    print("Success")



