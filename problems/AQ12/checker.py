'''
    This function's job is to check the output line by line (perhaps applying some special property). This function may differ in different programs.
    The basic framework is in place, and should be left in sample_question. 
    To create a question merely copy this and instead of merely checking for equality (in check_single), we could examine some properties of the different ouputs.
'''
def check_single(test_number,problem_path=""): # Checks ONE particular test
    output_path = problem_path + "outputs/output_" + str(test_number) + ".txt" # I hate to use this crutch, but I can't figure out how to make python functions treat their file paths relatively
    correct_output_path = problem_path + "correct_outputs/correct_output_" + str(test_number) + ".txt" # Ideally, whoevers reading this, if you could figure out how to make the check function figure this out without passing the problem_path (and not calling the file open function from where functions.py is...that'd be great.
    print(output_path)
    print(correct_output_path)
    with open(output_path,"r") as useroutputfile, open(correct_output_path,"r") as correctoutputfile:
        useroutput = useroutputfile.read().rstrip().splitlines()
        correctoutput = correctoutputfile.read().rstrip().splitlines()
        if(len(useroutput)!=len(correctoutput)):
            return "Wrong Answer"
        else: # Do something with the lines to validate the answer. (simple equality for single correct solution)
            for i in range(len(useroutput)):
                if(useroutput[i]!=correctoutput[i]):
                    return "Wrong Answer"
        return "Accepted"
def check_multiple(numberoftests, problem_path):
    for i in range(1,numberoftests+1): # make sure to make all the tests start from 1
        if(check(i,problem_path)=="Wrong Answer"):
            return "Wrong Answer"
    return "Accepted"

def binary_search(prices, value):
    low = 0
    high = len(prices)
    while(low<high):
        mid = low + (high - low + 1)/2
        if prices[mid] < value:
            low = mid
        else:
            high = mid - 1
    if prices[low+1]==value:
        return low+1
    return low

def check(problem_path=""): # Checks ONE particular test the one outside
    input_path = problem_path + "input.txt"
    output_path = problem_path + "output.txt" # I hate to use this crutch, but I can't figure out how to make python functions treat their file paths relatively
    correct_output_path = problem_path + "correct_output.txt" # Ideally, whoevers reading this, if you could figure out how to make the check function figure this out without passing the problem_path (and not calling the file open function from where functions.py is...that'd be great.
    with open(output_path,"r") as useroutputfile, open(input_path,"r") as inputfile:
        t = int(inputfile.readline())
        for k in range(t):
            prices = map(int, inputfile.readline().split())
            queries = map(int, inputfile.readline().split())
            for i in range(len(queries)):
                queries[i] = binary_search(prices, queries[i])
            try:
                answers = map(int, useroutputfile.readline().split())
            except:
                return "Was a presentation error"
            for i in range(len(answers)):
                try:
                    if prices[answers[i]]!=prices[queries[i]]:
                        print i
                        print answers[i], queries[i]
                        return "Wrong Answer"
                except:
                    return "Out of index"
        return "Accepted"
