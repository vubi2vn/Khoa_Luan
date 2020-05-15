import re

if __name__ == '__main__':

    file_result = open(r"C:\Users\QuocDai\Desktop\Khóa luận\Classification\Data\Result_negative.txt", "w",
                       encoding='utf-8')
    with open(r"C:\Users\QuocDai\Desktop\Khóa luận\Classification\Data\TieuCuc.txt","r",encoding='utf-8') as file_source:
        for line in file_source:
            string_a = re.sub('[.,?!"()/%$#@]','',line).split()
            for a in string_a:
                if(a!="\n" and not(a.isdigit())):
                    file_result.write(a.lower() + " ")
            file_result.write("\n")
    file_result_1 = open(r"C:\Users\QuocDai\Desktop\Khóa luận\Classification\Data\Result_positive.txt", "w",
                             encoding='utf-8')
    with open(r"C:\Users\QuocDai\Desktop\Khóa luận\Classification\Data\tichcuc.txt", "r",
                  encoding='utf-8') as file_source_1:
        for line in file_source_1:
            string_a = re.sub('[.,?!"()/%$#@]','',line).split()
            for a in string_a:
                if(a!="\n" and not(a.isdigit())):
                    file_result_1.write(re.sub('\W','',a).lower() + " ")
            file_result_1.write("\n")
    file_source.close()
    file_result.close()
    file_source_1.close()
    file_result_1.close()
    print("Success")



