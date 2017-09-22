def counter(a, b):
    sta = str(a)
    stb = str(b)
	
    counter = 0
    for i in range(len(stb)):
        index = sta.find(stb[i])
        #print(index)
        if index >= 0:
            counter += 1
    print (counter)
	
