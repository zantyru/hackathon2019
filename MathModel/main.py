
import copy

import data
import common
import euler

def calc_time(job, prev_job, units):
    total_volume = job.volume
    total_performance = 0
    for unit in units:
        total_volume += unit.performance*common.delay_time(unit, job, prev_job)
        total_performance += unit.performance
    result = total_volume/total_performance
    return result

def get_jobs_time(jobs):
    total_time = 0
    for i in range(len(jobs)):
        prev_job = common.HQ if i == 0 else jobs[i - 1]
        total_time += calc_time(jobs[i], prev_job, data.units)
    return total_time

def get_job_time(job, jobs, units):
    prev_job = common.HQ if len(jobs) == 0 else data.jobs[jobs[-1]]
    return calc_time(data.jobs[job], prev_job, units)

def minimax(moves, jobs, depth, total):
    minimax.count += 1
    if len(moves) == 0:
        return (total, jobs)
    results = []
    for move in moves:
        current_moves = [x for x in moves if x != move]
        current_jobs = [x for x in jobs]
        current_jobs.append(move)
        new_total = total + get_job_time(move, jobs, data.units)
        if new_total > minimax.best[0]:
            continue
        result = minimax(current_moves, current_jobs, depth + 1, new_total)
        results.append(result)
    for result in results:
        if result[0] < minimax.best[0]:
            minimax.best = result
    return minimax.best

if __name__ == '__main__':
    euler.data_set()
    minimax.best = (1e9, [])
    minimax.count = 0
    result = minimax([i for i in range(len(data.jobs))], [], 0, 0)
    print("result = %g" % (result[0]))
    print("count = %d" % (minimax.count))
    print(result[1])

# data.mos.ru
