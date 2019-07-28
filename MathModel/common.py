import math
import datatypes as types

HQ = types.Job("HQ", volume=0, coord=0, type=types.JobType.no)

def road_time(unit, from_coord, to_coord):
    return math.fabs(from_coord - to_coord)/unit.speed #TODO: improve

def reequipment_time(unit, prev_job, next_job):
    result = 0 if next_job.type == prev_job.type else unit.reequipment_time
    if result > 0: # we need to go to HQ for reequipment
        result += road_time(unit, prev_job.coord, HQ.coord) 
    return result

def delay_time(unit, prev_job, next_job):
    result = reequipment_time(unit, prev_job, next_job)
    if result > 0:
        result += road_time(unit, HQ.coord, next_job.coord)
    else:
        result += road_time(unit, prev_job.coord, next_job.coord)
    return result
