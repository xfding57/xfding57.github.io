import random
import string
import os 

# get current and preceding directories
current_directory = os.getcwd()
previous_directory = os.path.dirname(current_directory)

# read htmllist.txt and get the current html list
# Open the text file for reading
with open('htmllist.txt', 'r') as file:
	# Iterate through each line in the file
	for line in file:

		# generate 20 random alphanumeric characters
		n = 20
		characters = string.ascii_letters + string.digits
		random_string = ''.join(random.choice(characters) for _ in range(n))
		# print(random_string)

		# Check if the line is a comment (e.g., starts with '#')
		if not line.startswith('#'):
			# read line
			# print(line.strip())
			# locate file
			# print(os.path.isfile(os.path.join(previous_directory,line.strip())))
			if os.path.isfile(os.path.join(previous_directory,line.strip())) == True:
				pass
				currentfilename = os.path.join(previous_directory,line.strip())
				newfilename = os.path.join(previous_directory,os.path.splitext(line.strip())[0]+random_string+".html")
				print(currentfilename)
				print(newfilename)
				# os.rename(current_file_name, new_file_name)

				# change the line in textfile

			else:
				pass

