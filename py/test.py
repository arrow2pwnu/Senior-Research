def populate(dict):
	pop = open('txt/dictpopulate.txt', 'r')
	for line in pop:
		s = line.split(',')
		dict[s[0]] = s[1].rstrip()
	return dict

import sys

listed = {'integrate': 'int', 'integral': 'int', 'area': 'int'}
ignore = ['of', 'and', 'with', 'what', 'is', 'the']

def main():
	dict = {}

	#listed = populate(dict)



	arguments = sys.argv
	output = ""
	dxer = False
	for val in arguments[1:]:
		if val not in ignore:
			if val in listed:
				if listed[val] == 'int':
					dxer = True
				output += ' \\' + listed[val]
			else:
				if 'dx' in val:
					dxer = False
				output += ' ' + val
	if dxer:
		output += 'dx'
	print output



	'''
	print(listed)
	print listed['integrate']
	'''

if __name__ == '__main__': main()