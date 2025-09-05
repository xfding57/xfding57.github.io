import numpy as np
import requests
from bs4 import BeautifulSoup
run = 1

for i in range(np.random.randint(0, 4)):  # This returns a scalar, not an array
	print(i)
	if run == 1:
		with open('archivelinks.txt', 'r') as file:
			urls_to_archive = [line.strip() for line in file if not line.strip().startswith('#')]

		for url in urls_to_archive:
			print("Archiving: "+url)
			if run == 1:
				requests.get("https://web.archive.org/save/"+url)
