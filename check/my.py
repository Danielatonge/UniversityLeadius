my_file = open("format.txt","r+")
new_file = open("nformat.txt","w+")
#Use print to print the line else will remain in buffer and replaced by next statement
for line in my_file:
    row = '<li> ' + line.replace('\n', '') + ' </li>\n'
    new_file.write(row)
# with open('format.txt', 'r') as reader:
#     # Read & print the entire file
#      print(reader.read())

my_file.close()
new_file.close()