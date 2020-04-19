import csv

with open('address - address.csv') as csv_file:
    csv_reader = csv.reader(csv_file, delimiter=',')
    count = 0
    for row in csv_reader:
        if count == 0:
            print("Here are the names")
            count += 1
        else:
            if row[3] == "Ontario":
                print (row[0] + " " + row[1])
            count += 1
