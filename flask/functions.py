# Holds functions.
import os
import subprocess
import sys
def numberoftests(problem_path):
    with open(problem_path + "problem_data") as f:
        numberoftests = f.readline()
    return numberoftests

def judge(submission_path, problem_path, timeout, language_id): # Redirects to the other judging functions
    if language_id=="py":
        return judge_py(submission_path, problem_path, timeout) # Python has a 5 times extra timeout -- feel free to change these values
    elif language_id=="cpp":
        return judge_cpp(submission_path, problem_path, timeout)
    elif language_id=="java":
        return judge_java(submission_path, problem_path, timeout)
    else:
    	return judge_c(submission_path, problem_path, timeout)
def judge_py(submission_path, problem_path, timeout):
    command = "./timeout -t " + str(timeout) + " -m 256000" + " python2 " + submission_path + " < " + problem_path + "input.txt" + " 1 > " + problem_path + "output.txt" + " 2> " + problem_path + "err.txt"
    r = os.system(command)
    error_file_path = problem_path + "err.txt"
    with open(error_file_path,"r") as errfile:
        f = errfile.readline().split() # Note that other parts of this list hold information about the submisison. TODO pass this back as json 
        if f[0]=="FINISHED":
            return run_checker(problem_path)
        elif f[0]=="TIMEOUT":
            return "Time limit exceeded"
        elif f[0]=="MEM":
            return "Memory limit exceeded"
        elif f[0]=="Traceback" or f[0]=="File":
            return "Compilation/Runtime error"
        else:
            print(f[0])
            return "Something unexpected happened, please contact the gods in charge of this application immediately."
    return "TEST"
import imp
def run_checker(problem_path):
    checker_path = problem_path


    sys.path.append(os.path.abspath(checker_path))
    import checker
    imp.reload(checker)
    verdict = checker.check(problem_path)
    print(checker.return_state())
    sys.path.remove(os.path.abspath(checker_path))
    return verdict
