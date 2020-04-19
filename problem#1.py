def fibonacci(num):
    fib=[0,1]
    i=2
    check=0
    if num==0:
        print (0)
        return
    while check<num:
        check =fib[i-1]+fib[i-2]
        if check>num:
            break
        fib.append(check)
        i=i+1
    print(fib)
    add=0
    for item in fib:
        if item%2 !=0:
            add=add+item
    print(add)
    return
        
    
